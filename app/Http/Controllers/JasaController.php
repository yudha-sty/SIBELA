<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
use DB;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jasa = Jasa::all();
        return view('jasa/index', compact('jasa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jasa/create');
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
            'no_kwjs',
            'uraian_jasa',
            'jumlah_jasa',
            'harga_jasa',
            'total_jasa'
        ]);
        Jasa::create([
            'no_kwjs' => request('no_kwjs'),
            'uraian_jasa' => request('uraian_jasa'),
            'jumlah_jasa' => request('jumlah_jasa'),
            'harga_jasa' => request('harga_jasa'),
            'total_jasa' => request('total_jasa')
        ]);
        return redirect()->route('jasa.index')->with('success', 'Data Berhasil Ditambah');
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
        $jasa = DB::table('jasa')->where('id', $id)->get();
        return view('jasa/edit', ['jasa' => $jasa]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jasa $jasa)
    {
        $request->validate([
            'id' => 'id',
            'no_kwjs' => 'required',
            'uraian_jasa' => 'required',
            'jumlah_jasa' => 'required',
            'harga_jasa' => 'required',
            'total_jasa' => 'required'
        ]);
            $jasa->update($request->all());

            return redirect()->route('jasa.index')->with('success', 'Jasa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jasa $jasa)
    {
        $jasa->delete();
        return redirect()->route('jasa.index')
                        ->with('success', 'Klasifikasi deleted successfully');
    }
}
