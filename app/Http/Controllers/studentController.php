<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class studentController extends Controller
{
    //

    public function show($id)
    {
        $activity = Activity::find($id);
        $students = $activity->students;
        return view('example', ['activity' => $activity, 'students' => $students]);
    }
}
