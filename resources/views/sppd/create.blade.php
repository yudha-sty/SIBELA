<?php
use App\Models\Sppd;
?>
@extends('layouts.app')
@section('content')

<form action="{{ route('sppd.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Jenis SPPD</label>
        <input type="text" class="form-control" id="no_kwmdl" name="jenis_sppd">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Nomor Kwitansi SPPD</label>
        <input type="text" class="form-control" id="uraian_modal" name="no_kwsppd">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Uraian SPPD</label>
        <input type="text" class="form-control" id="jumlah_modal" name="uraian_sppd">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Kendaraan</label>
        <input type="text" class="form-control" id="harga_modal" name="kendaraan">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Harga_T</label>
        <input type="number" class="form-control" id="total_modal" name="harga_t">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Penginapan</label>
        <input type="text" class="form-control" id="harga_modal" name="penginapan">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Harga_P</label>
        <input type="text" class="form-control" id="harga_modal" name="harga_p">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Harian</label>
        <input type="text" class="form-control" id="harga_modal" name="harian">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Representasi</label>
        <input type="text" class="form-control" id="harga_modal" name="representasi">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Hari</label>
        <input type="text" class="form-control" id="harga_modal" name="hari">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Total</label>
        <input type="text" class="form-control" id="harga_modal" name="total">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection