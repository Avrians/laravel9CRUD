 @extends('layouts.app')

 @section('content')

<div class="container">

<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama">
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" id="nik">
    </div>
    <div class="mb-3">
        <label for="no_kk" class="form-label">NO KK</label>
        <input type="text" name="no_kk" class="form-control" id="no_kk">
    </div>
    <div class="mb-3">
        <label for="no_kk" class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="jenik_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="no_kk" class="form-label">NO KK</label>
        <textarea class="form-control" name="alamat" cols="30" rows="10"></textarea> <br>
    </div>
    <input type="submit" name="submit" value="Save" class="btn btn-info">
</form>

@endsection