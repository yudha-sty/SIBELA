<?php
use App\Models\Jasa;
?>
@extends('layouts.app')
@section('content')

<h4>Edit Data Jasa</h4>
@foreach($jasa as $j)
<form action="{{ route('jasa.update', $j->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $j->id }}" readonly>
    </div>
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nomor Kwitansi Jasa</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="no_kwjs" value="{{ $j->no_kwjs }}">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Uraian Jasa</label>
        <input type="text" class="form-control" id="kode_rekening" name="uraian_jasa" value="{{ $j->uraian_jasa }}">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Jumlah Jasa</label>
        <input type="text" class="form-control" id="nama_rekening" name="jumlah_jasa" value="{{ $j->jumlah_jasa }}">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Harga Jasa</label>
        <input type="number" class="form-control" id="user_id" name="harga_jasa" value="{{ $j->harga_jasa }}">
    </div>

    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Total Jasa</label>
        <input type="number" class="form-control" id="id_kegiatan" name="total_jasa" value="{{ $j->total_jasa }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection