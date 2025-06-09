@extends('adminlte::page')

@section('title', 'Dashboard  | Anggota')

@section('content_header')
    <h1>Anggota</h1>
@stop

@section('content')
<div class="row mb-3">
    <div class="col text-right">
        <a href="{{ route('members.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Anggota
        </a>
    </div>
</div>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->member_name }}</td>
            <td>{{ $member->member_email }}</td>
            <td>{{ $member->member_phone }}</td>
            <td>
                <a href="{{ route('members.show', $member) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-eye"></i> Lihat
                </a>
                <a href="{{ route('members.edit', $member) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('members.destroy', $member) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection