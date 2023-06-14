@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Jasa</h4>
            <a href="/jasa/create"><button class="btn btn-primary">Tambah Jasa</button></a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id Jasa</th>
                            <th>No Kwitansi Jasa</th>
                            <th>Uraian Jasa</th>
                            <th>Jumlah Jasa</th>
                            <th>Harga Jasa</th>
                            <th>Total Jasa</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jasa as $j)
                        <tr>
                            <td>{{ $j->id }}</td>
                            <td>{{ $j->no_kwjs }}</td>
                            <td>{{ $j->uraian_jasa }}</td>
                            <td>{{ $j->jumlah_Jasa }}</td>
                            <td>{{ $j->harga_jasa }}</td>
                            <td>{{ $j->total_jasa }}</td>
                            <td>
                                <form action="{{ route('jasa.destroy', $j->id) }}" method="POST">
                                    <a class="btn btn-primary" href="/jasa/{{ $j->id }}/edit">Edit</a>
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
                            <th>Id Jasa</th>
                            <th>No Kwitansi Jasa</th>
                            <th>Uraian Jasa</th>
                            <th>Jumlah Jasa</th>
                            <th>Harga Jasa</th>
                            <th>Total Jasa</th>
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