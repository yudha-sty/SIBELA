<?php
use App\Models\Kegiatan;
?>
@extends('layouts.app')
@section('content')

<h4>Edit Data Kegiatan</h4>
@foreach($kegiatan as $k)
<form action="{{ route('kegiatan.update', $k->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ID" class="form-label">ID</label>
        <input type="text" class="form-control" value="{{ $k->id }}" readonly>
    </div>
    <div class="mb-3">
        <label for="Nama Kegiatan" class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{ $k->nama_kegiatan }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection