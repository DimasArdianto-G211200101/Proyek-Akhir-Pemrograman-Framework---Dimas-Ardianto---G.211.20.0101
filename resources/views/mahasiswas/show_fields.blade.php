<!-- Nama Mahasiswa Field -->
<div class="col-sm-12">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    <p>{{ $mahasiswa->nama_mahasiswa }}</p>
</div>

<!-- Nim Field -->
<div class="col-sm-12">
    {!! Form::label('nim', 'Nim:') !!}
    <p>{{ $mahasiswa->nim }}</p>
</div>

<!-- Progdi Field -->
<div class="col-sm-12">
    {!! Form::label('progdi', 'Progdi:') !!}
    <p>{{ $mahasiswa->progdi }}</p>
</div>

<!-- Fakultas Field -->
<div class="col-sm-12">
    {!! Form::label('fakultas', 'Fakultas:') !!}
    <p>{{ $mahasiswa->fakultas }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $mahasiswa->email }}</p>
</div>

<!-- Usia Field -->
<div class="col-sm-12">
    {!! Form::label('usia', 'Usia:') !!}
    <p>{{ $mahasiswa->usia }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $mahasiswa->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mahasiswa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mahasiswa->updated_at }}</p>
</div>

