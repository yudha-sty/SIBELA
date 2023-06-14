@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Modal</h4>
            <a href="/modal/create"><button class="btn btn-primary">Tambah Modal</button></a>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Id Modal</th>
                            <th>No Kwitansi Modal</th>
                            <th>Uraian Modal</th>
                            <th>Jumlah Modal</th>
                            <th>Harga Modal</th>
                            <th>Total Modal</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modal as $m)
                        <tr>
                            <td>{{ $m->id }}</td>
                            <td>{{ $m->no_kwmdl }}</td>
                            <td>{{ $m->uraian_modal }}</td>
                            <td>{{ $m->jumlah_modal }}</td>
                            <td>{{ $m->harga_modal }}</td>
                            <td>{{ $m->total_modal }}</td>
                            <td>
                                <form action="{{ route('modal.destroy', $m->id) }}" method="POST">
                                    <a class="btn btn-primary" href="/modal/{{ $m->id }}/edit">Edit</a>
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
                            <th>Id Modal</th>
                            <th>No Kwitansi Modal</th>
                            <th>Uraian Modal</th>
                            <th>Jumlah Modal</th>
                            <th>Harga Modal</th>
                            <th>Total Modal</th>
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