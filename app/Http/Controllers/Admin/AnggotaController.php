<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Carbon\Carbon;
use TCPDF;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('dashboard.anggota.index', [
            'title' => 'Anggota',
            'anggota' => Anggota::all(),
        ]);
    }

    public function tambah()
    {
        $lastMember = Anggota::latest('id')->first();
        $lastId = $lastMember ? $lastMember->id + 1 : 1;
        $nomor_anggota = date('Ymd') . str_pad($lastId, 4, '0', STR_PAD_LEFT);

        return view('dashboard.anggota.tambah', [
            'title' => 'Tambah Anggota',
            'nomor_anggota' => $nomor_anggota,
        ]);
    }

    public function proses(Request $request)
    {
        $anggota = new Anggota();

        $anggota->nomor_anggota = $request->nomor_anggota;
        $anggota->nama = $request->nama;
        $anggota->telepon = $request->telepon;
        $anggota->status = $request->status;
        $anggota->alamat = $request->alamat;
        $anggota->tanggal_bergabung = Carbon::now()->toDateString();

        $anggota->save();

        return redirect('dashboard/anggota');
    }

    public function edit(Anggota $anggota)
    {
        return view('dashboard.anggota.edit', [
            'title' => 'Edit Anggota',
            'anggota' => $anggota,
        ]);
    }

    public function update(Request $request, Anggota $anggota)
    {
        $anggota->nomor_anggota = $request->nomor_anggota;
        $anggota->nama = $request->nama;
        $anggota->telepon = $request->telepon;
        $anggota->status = $request->status;
        $anggota->alamat = $request->alamat;

        $anggota->save();

        return redirect('dashboard/anggota');
    }

    public function hapus(Anggota $anggota)
    {
        Anggota::destroy($anggota->id);
        return redirect('dashboard/anggota');
    }
}
