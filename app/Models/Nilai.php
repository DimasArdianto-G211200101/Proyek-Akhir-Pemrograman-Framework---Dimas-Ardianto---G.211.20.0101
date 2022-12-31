<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Nilai
 * @package App\Models
 * @version December 30, 2022, 4:37 am UTC
 *
 * @property string $nama_mahasiswa
 * @property string $mata_kuliah
 * @property integer $nilai
 * @property string $predikat
 * @property string $keterangan
 */
class Nilai extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'nilais';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_mahasiswa',
        'mata_kuliah',
        'nilai',
        'predikat',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_mahasiswa' => 'string',
        'mata_kuliah' => 'string',
        'nilai' => 'integer',
        'predikat' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_mahasiswa' => 'required',
        'mata_kuliah' => 'required',
        'nilai' => 'required',
        'predikat' => 'required',
        'keterangan' => 'required'
    ];

    
}
