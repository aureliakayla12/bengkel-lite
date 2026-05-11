@extends('template.layout')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Servis
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <a href="{{ route('servis.create') }}" class="btn btn-primary mb-3">
                            Tambah Servis
                        </a>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Motor</th>
                                <th>Mekanik</th>
                                <th>Tanggal Servis</th>
                                <th>Keluhan</th>
                                <th>Biaya Jasa</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servis as $v)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $v->pelanggan->name ?? '-' }}</td>
                                    <td>{{ $v->motor->name ?? '-' }}</td>
                                    <td>{{ $v->mekanik->name ?? '-' }}</td>
                                    <td>{{ $v->tanggal_servis }}</td>
                                    <td>{{ $v->keluhan }}</td>
                                    <td>{{ $v->biaya_jasa }}</td>
                                    <td>{{ $v->total_bayar }}</td>
                                    <td>{{ $v->status }}</td>
                                    <td>
                                        <form action="{{route('servis.destroy', $v->servis_id)}}" method="POST"
                                            style="display: inline">
                                            {{csrf_field()}}
                                            @method('DELETE')
                                            <a href="{{route('servis.edit', $v->servis_id)}}"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <button type="submit"
                                                onclick="return confirm('Are you sure want to delete this customer?')"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
