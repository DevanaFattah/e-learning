<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';

    /**
     * Define One to Many Relationship into Jawaban
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany  
     */
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    /**
     * Define Inverse One to Many Relationship into Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
