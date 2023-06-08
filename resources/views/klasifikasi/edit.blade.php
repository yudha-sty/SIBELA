<?php
use App\Models\Klasifikasi;
?>
@extends('layouts.app')
@section('content')

<h4>Edit Data Klasifikasi</h4>
@foreach($klasifikasi as $k)
<form action="{{ route('klasifikasi.update', $k->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $k->id }}" readonly>
    </div>
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nama Klasifikasi</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="nama_klasifikasi" value="{{ $k->nama_klasifikasi }}">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Kode Rekening</label>
        <input type="text" class="form-control" id="kode_rekening" name="kode_rekening" value="{{ $k->kode_rekening }}">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Nama Rekening</label>
        <input type="text" class="form-control" id="nama_rekening" name="nama_rekening" value="{{ $k->nama_rekening }}">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">User ID</label>
        <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $k->user_id }}">
    </div>

    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Id Kegiatan</label>
        <input type="number" class="form-control" id="id_kegiatan" name="id_kegiatan" value="{{ $k->id_kegiatan }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection