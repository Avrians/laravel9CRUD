<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama"> <br>
    <input type="text" name="nik" placeholder="Nik"> <br>
    <input type="text" name="no_kk" placeholder="No KK"> <br>
    <select name="jenik_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select> <br>
    <textarea name="alamat"cols="30" rows="10"></textarea> <br>
    <input type="submit" name="submit" value="Save">
</form>