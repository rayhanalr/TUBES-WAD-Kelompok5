<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Reservasi;
use Barryvdh\DomPDF\Facade\Pdf;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function accept($id)
    {
        $reservasi = Reservasi::find($id);
        $reservasi->status = "Diterima";
        $reservasi->save();

        Alert::success('Berhasil', 'Reservasi telah diterima');
        return redirect()->back();
    }

    public function decline($id)
    {
        $reservasi = Reservasi::find($id);
        $reservasi->status = "Ditolak";
        $reservasi->save();

        Alert::success('Berhasil', 'Reservasi telah ditolak');
        return redirect()->back();
    }

    public function done($id)
    {
        $reservasi = Reservasi::find($id);
        $reservasi->status = "Selesai";
        $reservasi->save();

        Alert::success('Berhasil', 'Reservasi telah selesai');
        return redirect()->back();
    }

    public function tambah(Request $request)
    {
        $tempat = new \App\Models\Tempat;
        $tempat->nama = $request->nama;
        $tempat->save();

        Alert::success('Berhasil', 'Tempat telah ditambahkan');
        return redirect()->back();
    }

    public function delete($id)
    {
        $tempat = \App\Models\Tempat::find($id);
        $tempat->delete();

        Alert::success('Berhasil', 'Tempat telah dihapus');
        return redirect()->back();
    }

}
