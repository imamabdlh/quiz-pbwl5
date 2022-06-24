@extends('layouts.app')

@section('content')
<div class="container">

<h3>Edit Data Mahasiswa</h3>

<form action="{{ url('/pelanggan/' . $row->pel_id)}}" method="POST">

@method('PATCH')
@csrf
<div class="mb-3">
<label>ID Pelanggan</label>
<input type="text" class="form-control"name="pel_id" value="{{ $row->pel_id }}"></>
</div>
<div class="mb-3">
<label>No Pelanggan</label>
<input type="text" class="form-control"name="pel_no" value="{{ $row->pel_no }}"></>
</div>
<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" class="form-control"name="pel_nama"value="{{ $row->pel_nama }}"></>
</div>
<div class="mb-3">
<label>Alamat Pelanggan</label>
<input type="text" class="form-control"name="pel_alamat"value="{{ $row->pel_alamat }}"></>
</div>
<div class="mb-3">
<label>No HP Pelanggan</label>
<input type="text" class="form-control"name="pel_hp"value="{{ $row->pel_hp }}"></>
</div>
<div class="mb-3">
<label>KTP Pelanggan</label>
<input type="text" class="form-control"name="pel_ktp"value="{{ $row->pel_ktp }}"></>
</div>
<div class="mb-3">
<label>Meteran Pelanggan</label>
<input type="text" class="form-control"name="pel_meteran"value="{{ $row->pel_meteran }}"></>
</div>

<div class="mb-3">
<input type="submit" value="UPDATE">
</div>
</form>
</div>
@endsection
