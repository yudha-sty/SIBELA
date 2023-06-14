@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pakai Habis</h4>
            <a href="/ph/create"><button class="btn btn-primary">Tambah Pakai Habis</button></a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id PH</th>
                            <th>Nomor Kwitansi PH</th>
                            <th>Uraian PH</th>
                            <th>Jumlah PH</th>
                            <th>Harga PH</th>
                            <th>Total PH</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ph as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->no_kwph }}</td>
                            <td>{{ $p->uraian_ph }}</td>
                            <td>{{ $p->jumlah_ph }}</td>
                            <td>{{ $p->harga_ph }}</td>
                            <td>{{ $p->total_ph }}</td>
                            <td>
                                <form action="{{ route('ph.destroy', $p->id) }}" method="POST">
                                    <a class="btn btn-primary" href="/ph/{{ $p->id }}/edit">Edit</a>
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
                            <th>Id PH</th>
                            <th>Nomor Kwitansi PH</th>
                            <th>Uraian PH</th>
                            <th>Jumlah PH</th>
                            <th>Harga PH</th>
                            <th>Total PH</th>
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