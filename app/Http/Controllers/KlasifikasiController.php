<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Klasifikasi;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $klasifikasi = Klasifikasi::all();
        return view('klasifikasi/index', compact('klasifikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klasifikasi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_klasifikasi',
            'kode_rekening',
            'nama_rekening',
            'user_id',
            'id_kegiatan',
        ]);
        Klasifikasi::create([
            'nama_klasifikasi' => request('nama_klasifikasi'),
            'kode_rekening' => request('kode_rekening'),
            'nama_rekening' => request('nama_rekening'),
            'user_id' => request('user_id'),
            'id_kegiatan' => request('id_kegiatan')
        ]);
        return redirect()->route('klasifikasi.index')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klasifikasi = DB::table('klasifikasi')->where('id', $id)->get();
        return view('klasifikasi/edit', ['klasifikasi' => $klasifikasi]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klasifikasi $klasifikasi)
    {
        $request->validate([
            'id' => 'id',
            'nama_klasifikasi' => 'required',
            'kode_rekening' => 'required',
            'nama_rekening' => 'required',
            'user_id' => 'required',
            'id_kegiatan' => 'required',
        ]);
            $klasifikasi->update($request->all());

            return redirect()->route('klasifikasi.index')->with('success', 'Klasifikasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klasifikasi $klasifikasi)
    {
        $klasifikasi->delete();
        return redirect()->route('klasifikasi.index')
                        ->with('success', 'Klasifikasi deleted successfully');
    }
}
