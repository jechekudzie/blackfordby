<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = [
        'gender',
        'contacts',
        'addresses',
        'identifications',
        'guardian',
        'nextOfKin',
        'emergencyContact'
    ];

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

    public function guardian() {
        return $this->hasOne(Guardian::class);
    }

    public function nextOfKin() {
        return $this->hasOne(NextOfKin::class);
    }

    public function emergencyContact() {
        return $this->hasOne(EmergencyContact::class);
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

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }

//    public function scopeSearch($query, $value){
//        $query->where('studentFirstName', 'like', "%{$value}%")
//            ->orWhere('studentLastName', 'like', "%{$value}%");
//    }

    // Define the local scope
    public function scopeSearch($query, $value)
    {

        $query->where('first_name', 'like', "%{$value}%")
            ->orWhere('last_name', 'like', "%{$value}%");
//        if ($firstName) {
//            $query->where('first_name', 'like', '%' . $firstName . '%');
//        }
//
//        if ($lastName) {
//            $query->where('last_name', 'like', '%' . $lastName . '%');
//        }

        return $query;
    }
}
