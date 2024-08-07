<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function show(Student $student)
    {
        $studentData  = Student::find($student->id);

        return view('student.profile.view_student', compact('studentData'));
    }

    public function edit(Student $student)
    {
        $studentData  = Student::find($student->id);
        return view('student.profile.edit-student', compact('studentData'));
    }

    public function addEducationalRequirements(Student $student)
    {
        $studentData  = Student::find($student->id);
        return view('student.profile.educational-qualifications-view', compact('studentData'));
    }
}


