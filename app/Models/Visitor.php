<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname', 'lname', 'email', 'phone',
        'carplateno', 'visit_purpose', 'department',
        'checkintime', 'checkouttime', 'status'
    ];
}
