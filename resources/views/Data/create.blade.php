@extends('Data.Layouts.Master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf

      <div class="form-group">
        <label class="col-md-2 control-label" for="nama">ID Anggota</label>
        <div class="col-md-6">
          <input name="anggota_id" type="text" placeholder="ID Anggota" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="nama">Nama</label>
        <div class="col-md-6">
          <input name="nama" type="text" placeholder="Nama" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="tempat lahir">Tempat Lahir</label>
        <div class="col-md-6">
          <input name="tempat_lahir" type="text" placeholder="tempat lahir" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="tanggal lahir">Tanggal Lahir</label>
        <div class="col-md-6">
          <input name="tanggal_lahir" type="date" placeholder="" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="alamat">Alamat</label>
        <div class="col-md-6">
          <input name="alamat" type="text" placeholder="Alamat" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">ID Barang</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Nama Barang</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}
