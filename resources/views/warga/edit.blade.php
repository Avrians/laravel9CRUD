@extends('layouts.master')

@section('content')
    
<div class="container">
<h1>Edit Data Warga</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" placeholder="Nama" class="form-control"  value="{{ $warga->nama }}">
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" name="nik" placeholder="Nik" class="form-control"  value="{{ $warga->nik }}">
    </div>
    <div class="mb-3">
        <label for="no_kk" class="form-label">NO KK</label>
        <input type="text" name="no_kk" placeholder="No KK" class="form-control"  value="{{ $warga->no_kk }}">
    </div>
    <div class="mb-3">
        <label for="no_kk" class="form-label">Jenis Kelamin</label>
        <select name="jenik_kelamin" class="form-select" >
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if ($warga->jenik_kelamin == "L") selected @endif>Laki-laki</option>
            <option value="P" @if ($warga->jenik_kelamin == "P") selected @endif>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="no_kk" class="form-label">NO KK</label>
        <textarea name="alamat"class="form-control" cols="30" rows="10">{{ $warga->alamat }}</textarea>
    </div>
    <input type="submit" name="submit" value="Update" class="btn btn-info">
</form>
</div>
@endsection