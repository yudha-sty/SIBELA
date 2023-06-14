<?php
use App\Models\Pakai_Habis;
?>
@extends('layouts.app')
@section('content')

<form action="{{ route('ph.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nomor Kwitansi PH</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="no_kwph">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Uraian PH</label>
        <input type="text" class="form-control" id="kode_rekening" name="uraian_ph">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Jumlah PH</label>
        <input type="text" class="form-control" id="nama_rekening" name="jumlah_ph">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Harga PH</label>
        <input type="number" class="form-control" id="user_id" name="harga_ph">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Total PH</label>
        <input type="number" class="form-control" id="id_kegiatan" name="total_ph">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection