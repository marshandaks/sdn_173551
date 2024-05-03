<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Fasilitas;
use App\Models\Kegiatan;
use App\Models\Kontak;
use App\Models\Misi;
use App\Models\Pengumuman;
use App\Models\Photo;
use App\Models\Prestasi;
use App\Models\Saran;
use App\Models\Sejarah;
use App\Models\TenagaKerja;
use App\Models\Video;
use App\Models\Visi;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AppController extends Controller
{

    use ValidatesRequests;
    public function index()
    {
        return view('welcome', [
            'visi' => Visi::orderBy('id', 'desc')->limit(3)->get(),
            'misi' => Misi::orderBy('id', 'desc')->limit(3)->get(),
            'fasilitas' => Fasilitas::orderBy('id', 'desc')->limit(3)->get(),
            'kegiatan' => Kegiatan::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }

    public function berita()
    {
        return view('berita/berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }
    public function galeri()
    {
        return view('galery/galery', [
            'kegiatans' => Kegiatan::orderBy('id', 'desc')->get(),
            'fasilitas' => Fasilitas::orderBy('id', 'desc')->get()
        ]);
    }
    public function pengumuman()
    {
        return view('pengumuman/pengumuman', [
            'pengumumans' => Pengumuman::orderBy('id', 'desc')->get()
        ]);
    }
    public function tenagaKerja()
    {
        return view('tenagaKerja/tenagaKerja', [
            'tenagaKerjas' => TenagaKerja::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel =  Blog::where('slug', $slug)->first();
        return view('tenagaKerja/detail', [
            'artikel' => $artikel
        ]);
    }

    public function pengumumanSlug($slug)
    {
        $artikel =  Pengumuman::where('slug', $slug)->first();
        return view('pengumuman/detail', [
            'artikel' => $artikel
        ]);
    }
    public function prestasiSlug($slug)
    {
        $artikel =  prestasi::where('slug', $slug)->first();
        return view('prestasi/detail', [
            'artikel' => $artikel
        ]);
    }

    public function sejarah()
    {
        return view('sejarah/sejarah', [
            'sejarah' => Sejarah::orderBy('id')->get()
        ]);
    }
    public function kontak()
    {
        return view('kontak/kontak', [
            'kontak' => Kontak::orderBy('id')->get()
        ]);
    }
    public function visimisi()
    {
        return view('visimisi/visimisi', [
            'visi' => Visi::orderBy('id')->get(),
            'misi' => Misi::orderBy('id', 'desc')->get()
        ]);
    }

    public function saran()
    {
        return view('saran/saran', [
            'saran' => Saran::orderBy('id')->get()
        ]);
    }
    public function prestasi()
    {
        return view('prestasi/prestasi', [
            'prestasis' => Prestasi::orderBy('id')->get()
        ]);
    }

    public function storeSaran(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'saran' => 'required'
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'saran.required' => 'Saran wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        Saran::create([
            'nama' => $request->nama,
            'nomortelepon' => $request->nomortelepon,
            'saran' => $request->saran,
        ]);

        return redirect()->route('saran')->with('success', 'Data saran berhasil dikirim!');
    }
}
