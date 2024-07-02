<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'next_of_kins';

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
