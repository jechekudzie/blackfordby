<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Enrollment extends Model {
    use HasFactory;

    protected $guarded = [];

//    protected $with = [
//        'enrollmentType',
////        'enrollmentStatus',
////        'enrollmentYear',
////        'course',
////        'student',
//    ];

    public function enrollmentType(): HasOne
    {
        return $this->hasOne(EntryType::class);
    }

    public function enrollmentStatus()
    {
        return $this->belongsTo(EnrollmentStatus::class);
    }

    public function enrollmentYear()
    {
        return $this->belongsTo(EnrollmentYear::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function entryType(): BelongsTo
    {
        return $this->belongsTo(EntryType::class);
    }

 }

