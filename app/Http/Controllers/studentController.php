<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    //

    public function show($id)
    {
        $name = Student::find($id)->name;
        return view('example', ['nama' => $name]);
    }
}
