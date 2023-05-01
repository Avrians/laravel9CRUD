@extends('layouts.app')

@section('content')

<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">{{ __('Dashboard Warga') }}</div>
 
                 <div class="card-body">
                    <a href="/warga/create" class="btn btn-primary">Ada Warga</a> <br> <br>

                    <table class="table table-hover">
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
                                   <div class="btn-group">
                                   <a href="/warga/{{ $w->id }}/edit" class="btn btn-warning">Edit</a>
                                   <form action="/warga/{{ $w->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                   </form>
                                   </div>
                              </td>
                        </tr>
                        @endforeach
                    </table>
                 </div>
             </div>
         </div>
     </div>
 </div>


@endsection