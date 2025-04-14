<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = ['employee_id', 'description'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
