<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
    {
        return view('admin.saran.index', [

            'saran' => Saran::orderBy('id', 'desc')->get(),

        ]);
    }

    public function destroy($id)
    {
        $saran = Saran::find($id);
        $saran->delete();

        return redirect()->route('saranDashboard')->with('success', 'Data saran berhasil dihapus!');
    }
}
