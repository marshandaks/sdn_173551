<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        return view('admin.kontak.index', [

            'kontak' => Kontak::orderBy('id', 'desc')->get(),

        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'mediasosial' => 'required',
            'akun' => 'required'

        ];

        $messages = [
            'mediasosial.required' => 'Media sosial wajib diisi!',
            'akun.required' => 'Akun wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        Kontak::create([
            'mediasosial' => $request->mediasosial,
            'akun' => $request->akun,

        ]);


        return redirect()->route('kontakDashboard')->with('success
        ', 'Data photo berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id);

        $rules = [
            'mediasosial' => 'required',
            'akun' => 'required'

        ];

        $messages = [
            'mediasosial.required' => 'Media sosial wajib diisi!',
            'akun.required' => 'Akun wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $kontak->update([
            'mediasosial' => $request->mediasosial,
            'akun' => $request->akun,

        ]);

        return redirect()->route('kontakDashboard')->with('success
        ', 'Data photo berhasil disimpan!');
    }

    public function destroy($id)
    {
        $kontak = Kontak::find($id);

        $kontak->delete();
        return redirect()->route('kontakDashboard')->with('success
        ', 'Data video berhasil dihapus!');
    }
}
