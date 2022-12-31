<!-- Nama Mahasiswa Field -->
<div class="col-sm-12">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    <p>{{ $nilai->nama_mahasiswa }}</p>
</div>

<!-- Mata Kuliah Field -->
<div class="col-sm-12">
    {!! Form::label('mata_kuliah', 'Mata Kuliah:') !!}
    <p>{{ $nilai->mata_kuliah }}</p>
</div>

<!-- Nilai Field -->
<div class="col-sm-12">
    {!! Form::label('nilai', 'Nilai:') !!}
    <p>{{ $nilai->nilai }}</p>
</div>

<!-- Predikat Field -->
<div class="col-sm-12">
    {!! Form::label('predikat', 'Predikat:') !!}
    <p>{{ $nilai->predikat }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $nilai->keterangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $nilai->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $nilai->updated_at }}</p>
</div>

