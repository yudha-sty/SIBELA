@extends('layouts.app')
@section('content')
 
<div class="card-group">
    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                        <h2 class="text-dark mb-1 font-weight-medium">{{ count($kegiatan) }}</h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daftar Kegiatan</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                            class="set-doller"></sup>{{ count($jasa) }}</h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daftar Jasa
                    </h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                        <h2 class="text-dark mb-1 font-weight-medium">{{ count($sppd) }}</h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Daftar SPPD</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 font-weight-medium">{{ count($modal) }}</h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jenis Modal</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4>Overview Tabel SPPD</h4><br>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4>Overview Data Pakai Habis</h4><br>
            <div class="table-responsive">
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4>Overview Data Modal</h4><br>
            <div class="table-responsive">
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection