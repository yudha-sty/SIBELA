@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Kegiatan</h4>
            <a href="/kegiatan/create"><button class="btn btn-primary">Tambah Kegiatan</button></a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id Kegiatan</th>
                            <th>Nama Kegiatan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatan as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->nama_kegiatan }}</td>
                            <td>
                                <form action="{{ route('kegiatan.destroy', $k->id) }}" method="POST">
                                    <a class="btn btn-primary" href="/kegiatan/{{ $k->id }}/edit">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id Kegiatan</th>
                            <th>Nama Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection