<h1>Edit Data Warga</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{ $warga->nama }}"> <br>
    <input type="text" name="nik" placeholder="Nik" value="{{ $warga->nik }}"> <br>
    <input type="text" name="no_kk" placeholder="No KK" value="{{ $warga->no_kk }}"> <br>
    <select name="jenik_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if ($warga->jenik_kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if ($warga->jenik_kelamin == "P") selected @endif>Perempuan</option>
    </select> <br>
    <textarea name="alamat"cols="30" rows="10">{{ $warga->alamat }}</textarea> <br>
    <input type="submit" name="submit" value="Update">
</form>