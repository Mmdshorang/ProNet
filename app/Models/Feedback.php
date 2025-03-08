<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'giver_id',
        'content'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function giver()
    {
        return $this->belongsTo(Employee::class, 'giver_id');
    }
}
