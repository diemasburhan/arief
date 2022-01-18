@extends('layouts.app')

<?php $no=1?>
@section('content')
  <h3>Karyawan</h3>
  <a href="{{route('karyawan.create')}}" class="btn btn-success">Tambah Data</a>
  <br>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Aksi</th>
          <th></th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($karyawans as $karyawan)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$karyawan->nama}}</td>
              <td>{{$karyawan->jabatan}}</td>
              <td>
                <a href="{{route('karyawan.edit',$karyawan->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('karyawan.destroy',$karyawan->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>           
        @endforeach
      </tbody>
  </table>
@stop