<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'rater_id',
        'professional_skills',
        'teamwork',
        'ethics'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function rater()
    {
        return $this->belongsTo(Employee::class, 'rater_id');
    }
}
