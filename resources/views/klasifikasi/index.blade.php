@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Klasifikasi</h4>
            <a href="/klasifikasi/create"><button class="btn btn-primary">Tambah Klasifikasi</button></a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id Klasifikasi</th>
                            <th>Nama</th>
                            <th>Kode Rekening</th>
                            <th>Nama Rekening</th>
                            <th>User Id</th>
                            <th>Id Kegiatan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($klasifikasi as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->nama_klasifikasi }}</td>
                            <td>{{ $k->kode_rekening }}</td>
                            <td>{{ $k->nama_rekening }}</td>
                            <td>{{ $k->user_id }}</td>
                            <td>{{ $k->id_kegiatan }}</td>
                            <td>
                                <form action="{{ route('klasifikasi.destroy', $k->id) }}" method="POST">
                                    <a class="btn btn-primary" href="/klasifikasi/{{ $k->id }}/edit">Edit</a>
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
                            <th>Id Klasifikasi</th>
                            <th>Nama</th>
                            <th>Kode Rekening</th>
                            <th>Nama Rekening</th>
                            <th>User Id</th>
                            <th>Id Kegiatan</th>
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