<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        return view('admin.sejarah.index', [
            'artikels' => Sejarah::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.sejarah.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'desc' => 'required|min:20',
        ];

        $messages = [
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);


        # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');


        Sejarah::create([
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('atursejarah'))->with('success', 'data berhasil di simpan');
    }

    public function edit()
    {
        $artikel = Sejarah::first();
        return view('admin.sejarah.edit', [
            'artikel' => $artikel
        ]);
    }

    public function update(Request $request, $id)
    {
        $artikel = Sejarah::find($id);



        $rules = [
            'desc' => 'required|min:20',
        ];

        $messages = [
            'desc.required' => 'Deskirpsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();


        $artikel->update([
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('atursejarah'))->with('success', 'data berhasil di update');
    }
}
