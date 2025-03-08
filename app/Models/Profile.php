<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'skills',
        'achievements',
        'job_history'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
