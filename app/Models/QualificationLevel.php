<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationLevel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function academicHistories() {
        return $this->hasMany(AcademicHistory::class);
    }
}
