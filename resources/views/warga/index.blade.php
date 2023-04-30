<a href="/warga/create">Ada Warga</a> <br> <br>

<table>
     <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NIK</th>
        <th>NO KK</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
    </tr>
    
    @foreach ($warga as $w)     
    <tr>
         <td>{{ $w->id }}</td>
         <td>{{ $w->nama }}</td>
         <td>{{ $w->nik }}</td>
         <td>{{ $w->no_kk }}</td>
         <td>{{ $w->jenik_kelamin }}</td>
         <td>{{ $w->alamat }}</td>
         <td>
               <a href="/warga/{{ $w->id }}/edit">Edit</a>
               <form action="/warga/{{ $w->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete">
               </form>
          </td>
    </tr>
    @endforeach
</table>