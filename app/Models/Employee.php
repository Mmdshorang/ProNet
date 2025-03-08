<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'company_id',
        'position',
    ];

    // تعریف رابطه برعکس: هر کارمند متعلق به یک شرکت است
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

class EmployeeSkill extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'level'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}