<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeRating extends Model
{
    protected $fillable = [
        'employee_id', 'reviewer_id', 'professional_capabilities',
        'teamwork', 'ethics_and_relations', 'punctuality', 'behavior', 'comment'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function reviewer()
    {
        return $this->belongsTo(Employee::class, 'reviewer_id');
    }
}
