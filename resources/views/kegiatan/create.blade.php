<?php
use App\Models\Klasifikasi;
?>
@extends('layouts.app')
@section('content')

<form action="{{ route('kegiatan.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="Nama Klasifikasi" class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection