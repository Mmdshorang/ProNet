<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'commenter_id', 'content'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function commenter() {
        return $this->belongsTo(Employee::class, 'commenter_id');
    }
}
