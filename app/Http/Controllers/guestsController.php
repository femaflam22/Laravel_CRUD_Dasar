<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class guestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data.index');
    }

    public function data()
    {
        $dataReceptionist = guest::all();
        return view('data.data', ['data' => $dataReceptionist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.inputData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $dataBaru = new guest;
        // $dataBaru->nama_lengkap = $request->nama_lengkap;
        // $dataBaru->keperluan = $request->keperluan;
        // $dataBaru->nama_bersangkutan = $request->nama_bersangkutan;
        // $dataBaru->tanggal = $request->tanggal;
        // $dataBaru->telp = $request->telp;

        // $dataBaru->save();

        // cara lain yang lebih simple, tapi kalau dia pake fillable atau gurded di models nya
        // fillable : field yang boleh diisi
        // guarded : field yang ga bole diisi, pake salah satu aja mau fillable atau guarded boleh
        // pake cara ini lebih aman
        // maksud all nya itu all yang fillable

        $request->validate([
            'nama_lengkap' => 'required|min:5',
            'keperluan' => 'required',
            'nama_bersangkutan' => 'required|min:5',
            'tanggal' => 'required|date',
            'telp' => 'required|min:8',
        ], [
            'nama_lengkap.required' => 'Silahkan isi nama lengkap tamu',
            'nama_lengkap.min' => 'Nama di isi dengan lengkap',
            'nama_bersangkutan.min' => 'Nama di isi dengan lengkap',
            'nama_bersangkutan.required' => 'Silahkan isi nama lengkap yang bersangkutan',
            'keperluan.required' => 'Silahkan isi keterangan alasan kunjungan',
            'tanggal.required' => 'Silahkan isi tanggal berkunjungan',
            'tanggal.date' => 'Format tanggal seperti 05/01/2020',
            'telp.required' => 'Silahkan isi no.telp pengunjung',
            'telp.min' => 'No.telp di isi dengan benar',
        ]
        );

        guest::create($request->all());
        return redirect('/data')->with('sukses', 'Data Baru Berhasil di Tambahkan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(guest $guest)
    {
        return view('data.dataDetail', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(guest $guest)
    {
        return view('data.editData', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guest $guest)
    {
        $request->validate([
            'nama_lengkap' => 'required|min:5',
            'keperluan' => 'required',
            'nama_bersangkutan' => 'required|min:5',
            'tanggal' => 'required|date',
            'telp' => 'required|min:8',
        ], [
            'nama_lengkap.required' => 'Silahkan isi nama lengkap tamu',
            'nama_lengkap.min' => 'Nama di isi dengan lengkap',
            'nama_bersangkutan.min' => 'Nama di isi dengan lengkap',
            'nama_bersangkutan.required' => 'Silahkan isi nama lengkap yang bersangkutan',
            'keperluan.required' => 'Silahkan isi keterangan alasan kunjungan',
            'tanggal.required' => 'Silahkan isi tanggal berkunjungan',
            'tanggal.date' => 'Format tanggal seperti 05/01/2020',
            'telp.required' => 'Silahkan isi no.telp pengunjung',
            'telp.min' => 'No.telp di isi dengan benar',
        ]
        );
        
        guest::where('no', $guest->no)
            -> update([
                'nama_lengkap' => $request->nama_lengkap,
                'keperluan' => $request->keperluan,
                'nama_bersangkutan' => $request->nama_bersangkutan,
                'tanggal' => $request->tanggal,
                'telp' => $request->telp
            ]);

            return redirect('/data')->with('baru', 'Data Berhasil di ubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(guest $guest)
    {
        guest::destroy($guest->no);
        return redirect('/data')->with('terhapus', 'Data Berhasil di Hapus!');;
    }
}

