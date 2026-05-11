@extends('template.layout')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Mekanik
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <a href="{{ route('mekanik.create') }}" class="btn btn-primary mb-3">
                            Tambah Mekanik
                        </a>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mekanik</th>
                                <th>Nomor Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mekanik as $v)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $v->nama }}</td>
                                    <td>{{ $v->no_hp }}</td>
                                    <td>
                                        <form action="{{route('mekanik.destroy', $v->customer_id)}}" method="POST"
                                            style="display: inline">
                                            {{csrf_field()}}
                                            @method('DELETE')
                                            <a href="{{route('mekanik.edit', $v->customer_id)}}"
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
