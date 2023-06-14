<?php
use App\Models\Modal;
?>
@extends('layouts.app')
@section('content')

<h4>Edit Data Modal</h4>
@foreach($modal as $m)
<form action="{{ route('modal.update', $m->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $m->id }}" readonly>
    </div>
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nomor Kwitansi Modal</label>
        <input type="text" class="form-control" id="nama_klasifikasi" name="no_kwmdl" value="{{ $m->no_kwmdl }}">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Uraian Modal</label>
        <input type="text" class="form-control" id="kode_rekening" name="uraian_modal" value="{{ $m->uraian_modal }}">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Jumlah Modal</label>
        <input type="text" class="form-control" id="nama_rekening" name="jumlah_modal" value="{{ $m->jumlah_modal }}">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Harga Modal</label>
        <input type="number" class="form-control" id="user_id" name="harga_modal" value="{{ $m->harga_modal }}">
    </div>

    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Total Modal</label>
        <input type="number" class="form-control" id="id_kegiatan" name="total_modal" value="{{ $m->total_modal }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection