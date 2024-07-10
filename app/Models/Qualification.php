<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function ordinaryLevelInstitution()
    {
        return $this->belongsTo(Institution::class, 'ordinary_level_institution_id');
    }

    public function advancedLevelInstitution()
    {
        return $this->belongsTo(Institution::class, 'advanced_level_institution_id');
    }

    public function collegeLevelInstitution()
    {
        return $this->belongsTo(Institution::class, 'college_level_institution_id');
    }

    public function ordinaryLevel()
    {
        return $this->belongsTo(QualificationType::class, 'ordinary_level_id');
    }

    public function advancedLevel()
    {
        return $this->belongsTo(QualificationType::class, 'advanced_level_id');
    }

    public function collegeLevel()
    {
        return $this->belongsTo(QualificationType::class, 'college_level_id');
    }
}
