@extends('Data.Layouts.Master')
@section('content')

	<a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
	<br><br>

	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>ID Anggota</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($anggota as $dataanggota)
        {{-- expr --}}
        <tr>
					<td>{{$dataanggota->anggota_id}}</td>
          <td>{{$dataanggota->nama}}</td>
          <td>{{$dataanggota->tempat_lahir}}</td>
          <td>{{$dataanggota->tanggal_lahir}}</td>
          <td>{{$dataanggota->alamat}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $dataanggota->id]) }}" class="btn btn-danger btn-xs">Hapus</a>
            {{-- <a href="{{ Route('delete')}}" class="btn btn-danger btn-xs">Hapus</a> --}}
						<a href="{{ Route('edit', ['id' => $dataanggota->id]) }}" class="btn btn-warning btn-xs">Edit</a>
            {{-- <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
             --}}

          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection
