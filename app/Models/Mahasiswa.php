<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version December 30, 2022, 4:24 am UTC
 *
 * @property string $nama_mahasiswa
 * @property string $nim
 * @property string $progdi
 * @property string $fakultas
 * @property string $email
 * @property integer $usia
 * @property string $alamat
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_mahasiswa',
        'nim',
        'progdi',
        'fakultas',
        'email',
        'usia',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_mahasiswa' => 'string',
        'nim' => 'string',
        'progdi' => 'string',
        'fakultas' => 'string',
        'email' => 'string',
        'usia' => 'integer',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_mahasiswa' => 'required',
        'nim' => 'required',
        'progdi' => 'required',
        'fakultas' => 'required',
        'email' => 'required',
        'usia' => 'required',
        'alamat' => 'required'
    ];

    
}
