<?php
use App\Models\Sppd;
?>
@extends('layouts.app')
@section('content')

<h4>Edit Data SPPD</h4>
@foreach($sppd as $s)
<form action="{{ route('sppd.update', $s->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $s->id }}" readonly>
    </div>
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Jenis SPPD</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="jenis_sppd" value="{{ $s->jenis_sppd }}">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Nomor Kwitansi SPPD</label>
        <input type="text" class="form-control" id="uraian_modal" name="no_kwsppd" value="{{ $s->no_kwsppd }}">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Uraian SPPD</label>
        <input type="text" class="form-control" id="jumlah_modal" name="uraian_sppd" value="{{ $s->uraian_sppd }}">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Kendaraan</label>
        <input type="text" class="form-control" id="harga_modal" name="kendaraan" value="{{ $s->kendaraan }}">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Harga_T</label>
        <input type="number" class="form-control" id="total_modal" name="harga_t" value="{{ $s->harga_t }}">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Penginapan</label>
        <input type="text" class="form-control" id="harga_modal" name="penginapan" value="{{ $s->penginapan }}">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Harga_P</label>
        <input type="text" class="form-control" id="harga_modal" name="harga_p" value="{{ $s->harga_p }}">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Harian</label>
        <input type="text" class="form-control" id="harga_modal" name="harian" value="{{ $s->harian }}">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Representasi</label>
        <input type="text" class="form-control" id="harga_modal" name="representasi" value="{{ $s->representasi }}">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Hari</label>
        <input type="text" class="form-control" id="harga_modal" name="hari" value="{{ $s->hari }}">
    </div>    <div class="mb-3">
        <label for="User Id" class="form-label">Total</label>
        <input type="text" class="form-control" id="harga_modal" name="total" value="{{ $s->total }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection