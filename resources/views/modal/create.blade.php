<?php
use App\Models\Modal;
?>
@extends('layouts.app')
@section('content')

<form action="{{ route('modal.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">No Kwitansi Modal</label>
        <input type="text" class="form-control" id="no_kwmdl" name="no_kwmdl">
    </div>
    <div class="mb-3">
        <label for="Kode Rekening" class="form-label">Uraian Modal</label>
        <input type="text" class="form-control" id="uraian_modal" name="uraian_modal">
    </div>
    <div class="mb-3">
        <label for="Nama Rekening" class="form-label">Jumlah Modal</label>
        <input type="text" class="form-control" id="jumlah_modal" name="jumlah_modal">
    </div>
    <div class="mb-3">
        <label for="User Id" class="form-label">Harga Modal</label>
        <input type="number" class="form-control" id="harga_modal" name="harga_modal">
    </div>
    <div class="mb-3">
        <label for="Id Kegiatan" class="form-label">Total Modal</label>
        <input type="number" class="form-control" id="total_modal" name="total_modal">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection