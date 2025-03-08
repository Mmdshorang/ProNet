<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyEmployee extends Model {
    use HasFactory;

    protected $fillable = ['company_id', 'employee_id', 'joined_at', 'left_at'];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}