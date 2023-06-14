<?php
use App\Models\Pakai_Habis;
?>
@extends('layouts.app')
@section('content')

<h4>Edit Data Pakai Habis</h4>
@foreach($ph as $p)
<form action="{{ route('ph.update', $p->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $p->id }}" readonly>
    </div>
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nomor Kwitansi PH</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="no_kwph" value="{{ $p->no_kwph }}">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Uraian PH</label>
        <input type="text" class="form-control" id="kode_rekening" name="uraian_ph" value="{{ $p->uraian_ph }}">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Jumlah PH</label>
        <input type="text" class="form-control" id="nama_rekening" name="jumlah_ph" value="{{ $p->jumlah_ph }}">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Harga PH</label>
        <input type="number" class="form-control" id="user_id" name="harga_ph" value="{{ $p->harga_ph }}">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Total PH</label>
        <input type="number" class="form-control" id="id_kegiatan" name="total_ph" value="{{ $p->total_ph }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection