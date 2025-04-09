<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'email', 'password', 'location_id', 'logo', 'description'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function ratings()
    {
        return $this->hasMany(CompanyRating::class);
    }
}
