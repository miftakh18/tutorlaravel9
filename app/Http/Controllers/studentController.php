<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Spatie\FlareClient\View;

class studentController extends Controller
{
    //


    public function index()
    {

        // $studens  = Student::all();
        $studens  = Student::paginate(2);
        return view('index', ['students' => $studens]);
    }

    public function filter()
    {
        $students  = Student::where('score', '>=', 85)->where('name', 'LIKE', '%u%')->get();
        return view('filter', compact('students'));
    }

    public function show($id)
    {
        $student = Student::find($id);
        $activities = $student->activities;
        return view('example', ['activities' => $activities, 'student' => $student]);
    }
}
