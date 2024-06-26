<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function identifications() {
        return $this->hasMany(Identification::class);
    }
}
