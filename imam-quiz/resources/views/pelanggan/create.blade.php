@extends('layouts.app')

@section('content')
<div class="container">

<h3>Tambah Data Pelanggan</h3>
<form action="{{ url('/pelanggan') }}" method="POST">
@csrf
<div class="mb-3">
<label>ID Pelanggan</label>
<input type="text" class="form-control"name="pel_id">
</div>
<div class="mb-3">
<label>No Pelanggan</label>
<input type="text" class="form-control"name="pel_no">
</div>
<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" class="form-control"name="pel_nama">
</div>
<div class="mb-3">
<label>Alamat Pelanggan</label>
<textarea class="form-control"name="pel_alamat"></textarea>
</div>
<div class="mb-3">
<label>No HP Pelanggan</label>
<textarea class="form-control"name="pel_hp"></textarea>
</div>
<div class="mb-3">
<label>KTP Pelanggan</label>
<textarea class="form-control"name="pel_ktp"></textarea>
</div>
<div class="mb-3">
<label>Meteran Pelanggan</label>
<textarea class="form-control"name="pel_meteran"></textarea>
</div>
<div class="mb-3">
<input type="submit" value="SIMPAN">
</div>
</form>
</div>
@endsection