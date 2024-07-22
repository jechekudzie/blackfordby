<?php

namespace App\Livewire\Admin\Enrollment;


use App\Models\Enrollment;
use Livewire\Component;

class EnrollmentComponent extends Component
{

    public $search;
    public function render()
    {
        $enrollments = Enrollment::all();
        $pendingEnrollments = Enrollment::where('enrollment_status_id', 1)->get();
        $pausedEnrollments = Enrollment::where('enrollment_status_id', 2)->get();
        $rejectedEnrollments = Enrollment::where('enrollment_status_id', 3)->get();
        $approvedEnrollments = Enrollment::where('enrollment_status_id', 4)->get();
        return view('livewire.admin.enrollment.enrollment-component',
        ['enrollments' => $enrollments,
         'pendingEnrollments' => $pendingEnrollments,
         'pausedEnrollments' => $pausedEnrollments,
         'rejectedEnrollments' => $rejectedEnrollments,
         'approvedEnrollments' => $approvedEnrollments,
        ]
        );
    }
}
