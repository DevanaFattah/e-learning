<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jawaban extends Model
{
    use HasFactory;

    protected $table = 'jawaban';

    /**
     * Define Inverse One to Many Relationship into Tugas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
     */
    public function tugas()
    {
        return $this->belongsTo(Tugas::class);
    }

    /**
     * Define Inverse One to Many Relationship into User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
