<?php

use App\Http\Controllers\Student\StudentProfileController;
use App\Livewire\Student\Profile\ViewStudentComponent;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/view_students', function (){
        return view('student.profile.view-students');
    })->name('view_students');

    Route::get('/view_student', function (){
        return view('student.profile.view_student');
    })->name('view_student');

    Route::get('/view_student_profile/{student}',
        [StudentProfileController::class, 'show'])
        ->name('view-student-profile');

    Route::get('/edit_student_profile/{student}',
    [StudentProfileController::class, 'edit'])
    ->name('edit-student-profile');

    Route::get('/educational-requirements', function (){
        return view('student.profile.educational-qualifications-view');
    })->name('educational-requirements');
