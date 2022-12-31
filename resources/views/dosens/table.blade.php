<div class="table-responsive">
    <table class="table" id="dosens-table">
        <thead>
        <tr>
            <th>Nama Dosen</th>
        <th>Nidn</th>
        <th>Jabatan</th>
        <th>Mata Kuliah</th>
        <th>Email</th>
        <th>Alamat</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nama_dosen }}</td>
            <td>{{ $dosen->nidn }}</td>
            <td>{{ $dosen->jabatan }}</td>
            <td>{{ $dosen->mata_kuliah }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->alamat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dosens.destroy', $dosen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dosens.show', [$dosen->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dosens.edit', [$dosen->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
