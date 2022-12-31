<?php

namespace App\Repositories;

use App\Models\Mahasiswa;
use App\Repositories\BaseRepository;

/**
 * Class MahasiswaRepository
 * @package App\Repositories
 * @version December 30, 2022, 4:24 am UTC
*/

class MahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_mahasiswa',
        'nim',
        'progdi',
        'fakultas',
        'email',
        'usia',
        'alamat'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mahasiswa::class;
    }
}
