<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    protected $fillable = [
        'employee_id', 'company_id', 'job_title', 'start_date', 'end_date', 'description', 'employment_type'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
