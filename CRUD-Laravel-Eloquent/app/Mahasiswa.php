<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'jenis_kelamin', 'nim', 'dosen_id',
    ];

    public function dosen()
    {
        return $this->belongsTo('App\Dosen');
    }
}
