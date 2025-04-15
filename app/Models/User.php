<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class User extends Authenticatable
{   use HasFactory;
    protected $fillable = ['role', 'name', 'email', 'password', 'location_id'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'user_company')
                    ->withPivot('job_title', 'start_date', 'end_date', 'description', 'employment_type');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function receivedRatings()
    {
        return $this->hasMany(UserRating::class, 'user_id');
    }

    public function givenUserRatings()
    {
        return $this->hasMany(UserRating::class, 'reviewer_id');
    }

    public function givenCompanyRatings()
    {
        return $this->hasMany(CompanyRating::class, 'reviewer_id');
    }
}
