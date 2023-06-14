@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data SPPD</h4>
            <a href="/sppd/create"><button class="btn btn-primary">Tambah Sppd</button></a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id Sppd</th>
                            <th>Jenis Sppd </th>
                            <th>Nomor Kwitansi Sppd</th>
                            <th>Uraian Sppd</th>
                            <th>Kendaraan</th>
                            <th>Harga_T</th>
                            <th>Penginapan</th>
                            <th>Harga_P</th>
                            <th>Harian</th>
                            <th>representasi</th>
                            <th>Hari</th>
                            <th>Total</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sppd as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->jenis_sppd }}</td>
                            <td>{{ $s->no_kwsppd }}</td>
                            <td>{{ $s->uraian_sppd }}</td>
                            <td>{{ $s->kendaraan }}</td>
                            <td>{{ $s->harga_t }}</td>
                            <td>{{ $s->penginapan }}</td>
                            <td>{{ $s->harga_p }}</td>
                            <td>{{ $s->harian }}</td>
                            <td>{{ $s->representasi }}</td>
                            <td>{{ $s->hari }}</td>
                            <td>{{ $s->total }}</td>
                            <td>
                                <form action="{{ route('sppd.destroy', $s->id) }}" method="POST">
                                    <a class="btn btn-primary" href="/sppd/{{ $s->id }}/edit">Edit</a>
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
                            <th>Id Sppd</th>
                            <th>Jenis Sppd </th>
                            <th>Nomor Kwitansi Sppd</th>
                            <th>Uraian Sppd</th>
                            <th>Kendaraan</th>
                            <th>Harga_T</th>
                            <th>Penginapan</th>
                            <th>Harga_P</th>
                            <th>Harian</th>
                            <th>representasi</th>
                            <th>Hari</th>
                            <th>Total</th>
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