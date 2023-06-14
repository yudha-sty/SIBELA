<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pakai_Habis;

class PhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ph = Pakai_Habis::all();
        return view('ph/index', compact('ph'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ph/create');
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
            'no_kwph',
            'uraian_ph',
            'jumlah_ph',
            'harga_ph',
            'total_ph'
        ]);
        Pakai_Habis::create([
            'no_kwph' => request('no_kwph'),
            'uraian_ph' => request('uraian_ph'),
            'jumlah_ph' => request('jumlah_ph'),
            'harga_ph' => request('harga_ph'),
            'total_ph' => request('total_ph')
        ]);
        return redirect()->route('ph.index')->with('success', 'Data Berhasil Ditambah');
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
        $ph= DB::table('ph')->where('id', $id)->get();
        return view('ph/edit', ['ph' => $ph]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pakai_Habis $ph)
    {
        $request->validate([
            'no_kwph' => 'required',
            'uraian_ph' => 'required',
            'jumlah_ph' => 'required',
            'harga_ph' => 'required',
            'total_ph' => 'required'
        ]);
            $ph->update($request->all());

            return redirect()->route('ph.index')->with('success', 'PH updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pakai_Habis $ph)
    {
        $ph->delete();
        return redirect()->route('ph.index')
                        ->with('success', 'Sppd deleted successfully');
    }
}
