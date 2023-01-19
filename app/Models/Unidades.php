<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'timestamps', 'created_at', 'updated_at'];

public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, 'foreign_key', 'other_key');
    }

public function empresas(): BelongsTo
    {
        return $this->belongsTo(Empresas::class, 'foreign_key', 'other_key');
    }
}

