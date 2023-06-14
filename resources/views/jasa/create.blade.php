<?php
use App\Models\Jasa;
?>
@extends('layouts.app')
@section('content')

<form action="{{ route('jasa.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">No Kwitansi Jasa</label>
        <input type="text" class="form-control" id="no_kwjs" name="no_kwjs">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Uraian Jasa</label>
        <input type="text" class="form-control" id="uraian_modal" name="uraian_jasa">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Jumlah Jasa</label>
        <input type="text" class="form-control" id="jumlah_modal" name="jumlah_jasa">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Harga Jasa</label>
        <input type="number" class="form-control" id="harga_modal" name="harga_jasa">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Total Jasa</label>
        <input type="number" class="form-control" id="total_modal" name="total_jasa">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection