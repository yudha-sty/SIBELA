<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Sppd;

class SppdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sppd = Sppd::all();
        return view('sppd/index', compact('sppd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sppd/create');
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
            'jenis_sppd',
            'no_kwsppd',
            'uraian_sppd',
            'kendaraan',
            'harga_t',
            'penginapan',
            'harga_p',
            'harian',
            'representasi',
            'hari',
            'total'
        ]);
        Sppd::create([
            'jenis_sppd' => request('jenis_sppd'),
            'no_kwsppd' => request('no_kwsppd'),
            'uraian_sppd' => request('uraian_sppd'),
            'kendaraan' => request('kendaraan'),
            'harga_t' => request('harga_t'),
            'penginapan' => request('penginapan'),
            'harga_p' => request('harga_p'),
            'harian' => request('harian'),
            'representasi' => request('representasi'),
            'hari' => request('hari'),
            'total' => request('total')
        ]);
        return redirect()->route('sppd.index')->with('success', 'Data Berhasil Ditambah');
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
        $sppd = DB::table('sppd')->where('id', $id)->get();
        return view('sppd/edit', ['sppd' => $sppd]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sppd $sppd)
    {
        $request->validate([
            'jenis_sppd' => 'required',
            'no_kwsppd' => 'required',
            'uraian_sppd' => 'required',
            'kendaraan' => 'required',
            'harga_t' => 'required',
            'penginapan' => 'required',
            'harga_p' => 'required',
            'harian' => 'required',
            'representasi' => 'required',
            'hari' => 'required',
            'total' => 'required',
        ]);
            $sppd->update($request->all());

            return redirect()->route('sppd.index')->with('success', 'Sppd updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sppd $sppd)
    {
        $sppd->delete();
        return redirect()->route('sppd.index')
                        ->with('success', 'Sppd deleted successfully');
    }
}
