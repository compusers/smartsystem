<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

public function unidades(): HasMany
{
    return $this->hasMany(Unidades::class, 'foreign_key', 'local_key');
}

public function user(): BelongsTo
{
    return $this->belongsTo(User::class, 'foreign_key', 'other_key');
}
}



