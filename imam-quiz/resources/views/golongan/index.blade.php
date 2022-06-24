@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Golongan</h3>
    <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">
        Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <td>KODE</td>
            <td>NAMA GOLONGAN</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/' . $row->gol_kode . '/edit') }}">Edit</a></td>
            <td>
                <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection