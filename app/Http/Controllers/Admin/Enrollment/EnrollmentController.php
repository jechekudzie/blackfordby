<?php

namespace App\Http\Controllers\Admin\Enrollment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        return view('admin.enrollment.index');
    }
}
