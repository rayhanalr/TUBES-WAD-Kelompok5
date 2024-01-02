<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Reservasi;
use App\Models\Tempat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservasi = Reservasi::where('user_id', Auth::id())->get();
        $acceptCount = Reservasi::where('user_id', Auth::id())->where('status', 'Diterima')->count() + Reservasi::where('user_id', Auth::id())->where('status', 'Selesai')->count();
        $declineCount = Reservasi::where('user_id', Auth::id())->where('status', 'Ditolak')->count();
        $waitingCount = Reservasi::where('user_id', Auth::id())->where('status', 'Menunggu')->count();
        $acceptCountAll = Reservasi::where('status', 'Diterima')->count() + Reservasi::where('status', 'Selesai')->count();
        $declineCountAll = Reservasi::where('status', 'Ditolak')->count();
        $waitingCountAll = Reservasi::where('status', 'Menunggu')->count();
        return view('index', compact('reservasi', 'acceptCount', 'declineCount', 'waitingCount', 'acceptCountAll', 'declineCountAll', 'waitingCountAll'));
    }

    public function create()
    {
        $tempat = Tempat::all();
        return view('create', compact('tempat'));
    }

    public function history()
    {
        $reservasi = Reservasi::where('user_id', Auth::id())->get();
        return view('history', compact('reservasi'));
    }

    public function store(Request $request)
    {

        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        $reservasi = new \App\Models\Reservasi;
        $reservasi->nama = $request->name;
        $reservasi->email = $request->email;
        $reservasi->nomor_telepon = $request->phone;
        $reservasi->tanggal = $request->get('tanggal');
        $reservasi->nama_kegiatan = $request->get('nama_kegiatan');
        $reservasi->tempat_kegiatan = $request->get('tempat');
        $reservasi->deskripsi_kegiatan = $request->get('deskripsi');
        $reservasi->file = $nama_file;
        $reservasi->status = "Menunggu";
        $reservasi->user_id = Auth::id();
        $reservasi->save();

        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('history')->with('success', 'Data Berhasil Ditambahkan');
    }
}
