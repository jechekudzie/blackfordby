<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function addressType() {
        return $this->belongsTo(AddressType::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
