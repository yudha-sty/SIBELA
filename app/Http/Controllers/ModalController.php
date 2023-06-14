<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Modal;

class ModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $modal = Modal::all();
        return view('modal/index', compact('modal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modal/create');
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
            'no_kwmdl',
            'uraian_modal',
            'jumlah_modal',
            'harga_modal',
            'total_modal'
        ]);
        Modal::create([
            'no_kwmdl' => request('no_kwmdl'),
            'uraian_modal' => request('uraian_modal'),
            'jumlah_modal' => request('jumlah_modal'),
            'harga_modal' => request('harga_modal'),
            'total_modal' => request('total_modal')
        ]);
        return redirect()->route('modal.index')->with('success', 'Data Berhasil Ditambah');
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
        $modal = DB::table('modal')->where('id', $id)->get();
        return view('modal/edit', ['modal' => $modal]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modal $modal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modal $modal)
    {
        $modal->delete();
        return redirect()->route('modal.index')
                        ->with('success', 'Klasifikasi deleted successfully');
    }
}
