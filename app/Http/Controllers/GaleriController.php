<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Kegiatan;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        return view('admin.galeri.index', [
            'kegiatans' => Kegiatan::orderBy('id', 'desc')->get(),
            'fasilitas' => Fasilitas::orderBy('id', 'desc')->get()
        ]);
    }

    // Keigatan
    public function storeKegiatan(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/kegiatan', $fileName);

        Kegiatan::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect()->route('galeriDashboard')->with('successKegiatan', 'Data kegiatan berhasil disimpan!');
    }

    public function updateKegiatan(Request $request, $id)
    {
        $kegiatan = Kegiatan::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => 'max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $kegiatan = Kegiatan::find($id);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/kegiatan/' . $kegiatan->image)) {
                \File::delete('storage/kegiatan/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/kegiatan', $fileName);
        }
        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $kegiatan->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
        ]);

        return redirect()->route('galeriDashboard')->with('successKegiatan', 'Data galeri berhasil diupdate!');
    }


    public function destroyKegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);
        if (\File::exists('storage/kegiatan/' . $kegiatan->image)) {
            \File::delete('storage/kegiatan/' . $kegiatan->image);
        }
        $kegiatan->delete();
        return redirect()->route('galeriDashboard')->with('successKegiatan', 'Data galeri berhasil dihapus!');
    }

    // Fasilitas
    public function storeFasilitas(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/fasilitas', $fileName);

        Fasilitas::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect()->route('galeriDashboard')->with('successFasilitas', 'Data fasilitas berhasil disimpan!');
    }

    public function updateFasilitas(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => 'max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $fasilitas = Fasilitas::find($id);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/fasilitas/' . $fasilitas->image)) {
                \File::delete('storage/fasilitas/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/fasilitas', $fileName);
        }
        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $fasilitas->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
        ]);

        return redirect()->route('galeriDashboard')->with('successFasilitas', 'Data fasilitas berhasil diupdate!');
    }

    public function destroyFasilitas($id)
    {
        $fasilitas = Fasilitas::find($id);
        if (\File::exists('storage/fasilitas/' . $fasilitas->image)) {
            \File::delete('storage/fasilitas/' . $fasilitas->image);
        }
        $fasilitas->delete();
        return redirect()->route('galeriDashboard')->with('successFasilitas', 'Data fasilitas berhasil dihapus!');
    }
}
