<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function qualificationLevel() {
        return $this->belongsTo(QualificationLevel::class);
    }

    public function qualificationCategory() {
        return $this->belongsTo(QualificationCategory::class);
    }

    public function terminationReason() {
        return $this->belongsTo(TerminationReason::class);
    }
}
