<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    /**
     * Define Inverse One to Many Relationship into User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
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
