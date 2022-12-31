<!-- Nama Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    {!! Form::text('nama_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Mata Kuliah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mata_kuliah', 'Mata Kuliah:') !!}
    {!! Form::text('mata_kuliah', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai', 'Nilai:') !!}
    {!! Form::number('nilai', null, ['class' => 'form-control']) !!}
</div>

<!-- Predikat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predikat', 'Predikat:') !!}
    {!! Form::text('predikat', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>