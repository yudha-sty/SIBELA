<?php
use App\Models\Klasifikasi;
?>
@extends('layouts.app')
@section('content')

<form action="{{ route('klasifikasi.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nama Klasifikasi</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="nama_klasifikasi">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Kode Rekening</label>
        <input type="text" class="form-control" id="kode_rekening" name="kode_rekening">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Nama Rekening</label>
        <input type="text" class="form-control" id="nama_rekening" name="nama_rekening">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">User ID</label>
        <input type="number" class="form-control" id="user_id" name="user_id">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Id Kegiatan</label>
        <input type="number" class="form-control" id="id_kegiatan" name="id_kegiatan">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection