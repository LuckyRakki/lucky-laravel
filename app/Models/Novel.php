<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Novel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_novel',
        'negara',
        'genre_id'
    ];

    public function genre(): BelongsTo
    {
        return $this->BelongsTo(Genre::class);
    }
}