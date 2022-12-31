<?php

namespace App\Repositories;

use App\Models\Dosen;
use App\Repositories\BaseRepository;

/**
 * Class DosenRepository
 * @package App\Repositories
 * @version December 30, 2022, 4:34 am UTC
*/

class DosenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_dosen',
        'nidn',
        'jabatan',
        'mata_kuliah',
        'email',
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
        return Dosen::class;
    }
}
