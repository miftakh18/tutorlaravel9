<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Redirect;
use Spatie\FlareClient\View;
use Symfony\Contracts\Service\Attribute\Required;

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
        // $student = Student::find($id);
        // $activities = $student->activities;
        // return view('example', ['activities' => $activities, 'student' => $student]);

        // sesi show data detail part 1
        $student = Student::find($id);
        return view('show', ['student' => $student]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'Required', 'score' => 'required']);
        $data = [
            'name' => $request->name,
            'score' => $request->score,
            //    karena masih dalam relationship teacher id harus di isi sementara di default
            'teacher_id' => 1
        ];
        Student::create($data);
        return Redirect::route('index');
    }
}
