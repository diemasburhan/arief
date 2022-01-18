@extends('layouts.app')

@section('content')
<h3>Tambah Karyawan</h3>

<form method="post" action="{{route('karyawan.store')}}">
    @csrf
    <div class="form-group">
      <label for="nama">Nama Karyawan</label>
      <input type="text" class="form=control" name="nama">
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form=control" name="jabatan">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop