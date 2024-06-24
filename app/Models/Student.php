<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gender() {
        return $this->belongsTo(Gender::class);
    }

    public function contacts() {
        return $this->hasMany(Contact::class);
    }

    public function addresses() {
        return $this->hasMany(Address::class);
    }

    public function identifications() {
        return $this->hasMany(Identification::class);
    }

    public function guardians() {
        return $this->hasMany(Guardian::class);
    }

    public function nextOfKins() {
        return $this->hasMany(NextOfKin::class);
    }

    public function emergencyContacts() {
        return $this->hasMany(EmergencyContact::class);
    }

    public function academicHistories() {
        return $this->hasMany(AcademicHistory::class);
    }

    public function healthRecords() {
        return $this->hasMany(HealthRecord::class);
    }

    public function languages() {
        return $this->hasMany(Language::class);
    }

    public function scholarships() {
        return $this->hasMany(Scholarship::class);
    }
}
