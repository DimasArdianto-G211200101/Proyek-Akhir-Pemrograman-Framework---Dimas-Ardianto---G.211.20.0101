<!-- Nama Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    {!! Form::text('nama_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim:') !!}
    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
</div>

<!-- Progdi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('progdi', 'Progdi:') !!}
    {!! Form::text('progdi', null, ['class' => 'form-control']) !!}
</div>

<!-- Fakultas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fakultas', 'Fakultas:') !!}
    {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Usia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usia', 'Usia:') !!}
    {!! Form::number('usia', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>