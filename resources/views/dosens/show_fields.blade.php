<!-- Nama Dosen Field -->
<div class="col-sm-12">
    {!! Form::label('nama_dosen', 'Nama Dosen:') !!}
    <p>{{ $dosen->nama_dosen }}</p>
</div>

<!-- Nidn Field -->
<div class="col-sm-12">
    {!! Form::label('nidn', 'Nidn:') !!}
    <p>{{ $dosen->nidn }}</p>
</div>

<!-- Jabatan Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $dosen->jabatan }}</p>
</div>

<!-- Mata Kuliah Field -->
<div class="col-sm-12">
    {!! Form::label('mata_kuliah', 'Mata Kuliah:') !!}
    <p>{{ $dosen->mata_kuliah }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $dosen->email }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $dosen->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dosen->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dosen->updated_at }}</p>
</div>

