<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dosen
 * @package App\Models
 * @version December 30, 2022, 4:34 am UTC
 *
 * @property string $nama_dosen
 * @property string $nidn
 * @property string $jabatan
 * @property string $mata_kuliah
 * @property string $email
 * @property string $alamat
 */
class Dosen extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dosens';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_dosen',
        'nidn',
        'jabatan',
        'mata_kuliah',
        'email',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_dosen' => 'string',
        'nidn' => 'string',
        'jabatan' => 'string',
        'mata_kuliah' => 'string',
        'email' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_dosen' => 'required',
        'nidn' => 'required',
        'jabatan' => 'required',
        'mata_kuliah' => 'required',
        'email' => 'required',
        'alamat' => 'required'
    ];

    
}
