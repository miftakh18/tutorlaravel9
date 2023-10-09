<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use PDO;

class Student extends Model
{
    use HasFactory;
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function activity()
    {
        return $this->belongsToMany(Activity::class);
    }
}
