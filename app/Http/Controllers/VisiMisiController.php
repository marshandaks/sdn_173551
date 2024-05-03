<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        return view('admin.visimisi.index', [

            'visi' => Visi::orderBy('id', 'desc')->get(),
            'misi' => Misi::orderBy('id', 'desc')->get(),

        ]);
    }

    public function storeVisi(Request $request)
    {
        $rules = [
            'visi' => 'required',
        ];

        $messages = [
            'visi.required' => 'Visi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        Visi::create([
            'visi' => $request->visi,
        ]);


        return redirect()->route('visimisis')->with('successVisi', 'Data photo berhasil disimpan!');
    }

    public function storeMisi(Request $request)
    {
        $rules = [
            'misi' => 'required',
        ];

        $messages = [
            'misi.required' => 'Misi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        Misi::create([
            'misi' => $request->misi,
        ]);

        return redirect()->route('visimisis')->with('successMisi', 'Data photo berhasil disimpan!');
    }

    public function updateVisi(Request $request, $id)
    {
        $visi = Visi::find($id);

        $rules = [
            'visi' => 'required',
        ];

        $messages = [
            'visi.required' => 'Visi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $visi->update([
            'visi' => $request->visi,
        ]);

        return redirect()->route('visimisis')->with('successVisi', 'Data photo berhasil disimpan!');
    }

    public function updateMisi(Request $request, $id)
    {
        $misi = Misi::find($id);

        $rules = [
            'misi' => 'required',
        ];

        $messages = [
            'misi.required' => 'Misi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $misi->update([
            'misi' => $request->misi,
        ]);

        return redirect()->route('visimisis')->with('successMisi', 'Data photo berhasil disimpan!');
    }

    public function destroyVisi($id)
    {
        $visi = Visi::find($id);

        $visi->delete();
        return redirect()->route('visimisis')->with('successVisi', 'Data video berhasil dihapus!');
    }
    public function destroyMisi($id)
    {
        $misi = Misi::find($id);

        $misi->delete();
        return redirect()->route('visimisis')->with('successMisi', 'Data video berhasil dihapus!');
    }
}
