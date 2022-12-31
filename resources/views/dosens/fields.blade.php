<!-- Nama Dosen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_dosen', 'Nama Dosen:') !!}
    {!! Form::text('nama_dosen', null, ['class' => 'form-control']) !!}
</div>

<!-- Nidn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nidn', 'Nidn:') !!}
    {!! Form::text('nidn', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Mata Kuliah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mata_kuliah', 'Mata Kuliah:') !!}
    {!! Form::text('mata_kuliah', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>