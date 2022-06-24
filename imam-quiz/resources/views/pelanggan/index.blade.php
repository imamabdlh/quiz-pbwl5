@extends('layouts.app')
@section('content')

<div class="container">

<h3>Daftar Pelanggan</h3>
<a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">
        Tambah Data</a>

        <table class="table table-bordered">
<tr>
<td>ID Pelanggan</td>
<td>No Pelanggan</td>
<td>Nama Pelanggan</td>
    <td>Alamat Pelanggan</td>
    <td>No HP Pelanggan</td>
    <td>KTP Pelanggan</td>
    <td>Meteran Pelanggan</td>
    <td>EDIT</td>
</tr>
@foreach($rows as $row)
<tr>
<td>{{ $row->pel_id }}</td>
<td>{{ $row->pel_no }}</td>
<td>{{ $row->pel_nama }}</td>
<td>{{ $row->pel_alamat }}</td>
<td>{{ $row->pel_hp }}</td>
<td>{{ $row->pel_ktp }}</td>
<td>{{ $row->pel_meteran }}</td>
<td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a></td>
<td>
    
<form action="{{ url('pelanggan/' . $row->pel_id) }}"method="POST">
@method('DELETE')
@csrf
<button>Hapus</button>

</form>
<td>
</tr>
@endforeach
</table>
</div>
@endsection 