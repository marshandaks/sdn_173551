<?php

namespace App\Http\Controllers;

use App\Models\TenagaKerja;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class TenagaKerjaController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        return view('admin.tenagaKerja.index', [
            'tenagaKerjas' => TenagaKerja::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'jabatan' => 'required',
            'wali_kelas' => 'required',
            'tanggal_lahir' => 'required',
            'no_telpon' => 'required',
        ];

        $messages = [
            'nama.required' => 'nama wajib diisi!',
            'image.required' => 'nama wajib diisi!',
            'jabatan.required' => 'jabatan wajib diisi!',
            'wali_kelas.required' => 'wali kelas wajib diisi!',
            'tanggal_lahir.required' => 'tanggal lahir wajib diisi!',
            'no_telpon.required' => 'no telpon wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/tenagaKerja', $fileName);

        TenagaKerja::create([
            'nama' => $request->nama,
            'image' => $fileName,
            'jabatan' => $request->jabatan,
            'wali_kelas' => $request->wali_kelas,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telpon' => $request->no_telpon,
        ]);

        return redirect()->route('tenagaKerjaDashboard')->with('success', 'Data tenagaKerja berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $tenagaKerja = TenagaKerja::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'nama' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'jabatan' => '',
            'wali_kelas' => 'required',
            'tanggal_lahir' => 'required',
            'no_telpon' => 'required',
        ];

        $messages = [
            'nama.required' => 'nama wajib diisi!',
            'image.required' => 'nama wajib diisi!',
            'jabatan.required' => 'jabatan wajib diisi!',
            'wali_kelas.required' => 'wali kelas wajib diisi!',
            'tanggal_lahir.required' => 'tanggal lahir wajib diisi!',
            'no_telpon.required' => 'no telpon wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $tenagaKerja = TenagaKerja::find($id);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/tenagaKerja/' . $tenagaKerja->image)) {
                \File::delete('storage/tenagaKerja/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/tenagaKerja', $fileName);
        }
        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $tenagaKerja->update([
            'nama' => $request->nama,
            'image' => $checkFileName,
            'jabatan' => $request->jabatan,
            'wali_kelas' => $request->wali_kelas,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telpon' => $request->no_telpon,
        ]);

        return redirect()->route('tenagaKerjaDashboard')->with('success', 'Data tenagaKerja berhasil diupdate!');
    }


    public function destroy($id)
    {
        $tenagaKerja = TenagaKerja::find($id);
        if (\File::exists('storage/tenagaKerja/' . $tenagaKerja->image)) {
            \File::delete('storage/tenagaKerja/' . $tenagaKerja->image);
        }
        $tenagaKerja->delete();
        return redirect()->route('tenagaKerjaDashboard')->with('success', 'Data tenagaKerja berhasil dihapus!');
    }
}
