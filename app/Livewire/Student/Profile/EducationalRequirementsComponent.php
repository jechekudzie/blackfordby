<?php

namespace App\Livewire\Student\Profile;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\EnrollmentType;
use App\Models\EntryType;
use App\Models\Institution;
use App\Models\Qualification;
use App\Models\Sponsor;
use App\Models\Student;
use App\Models\StudyYear;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EducationalRequirementsComponent extends Component
{
    use WithFileUploads;

    public Student $student;

    public $currentStep = 1;


    public $search;
    public $selectedEnrollmentYearId = 0;
    public $selectedEntryTypeId = 0;

    public $selectedEnrollmentTypesId = 0;

    public $selectedSponsorId = 0;

    public $schools;
    public $selectedOrdinaryLevelSchoolId = 0;
    public $selectedOrdinaryLevelSchoolName = '';

    public $selectedAdvancedLevelSchoolId = 0;
    public $selectedAdvancedLevelSchoolName = '';

    public $selectedCollegelId = 0;
    public $selectedACollegeName = '';

    public $fromOlevelYear;
    public $fromOlevelYearId;

    public $fromAlevelYear;
    public $fromAlevelYearId;

    public $fromCollegeYear;
    public $fromCollegeYearId;


    public $toOlevelYear;
    public $toOlevelYearId;

    public $toAlevelYear;
    public $toAlevelYearId;

    public $toCollegeYear;
    public $toCollegeYearId;

    public $ordinaryLevelCertificate;
    public $ordinaryLevelTranscript;
    public $advancedLevelCertificate;
    public $advancedLevelTranscript;

    public $collegeCertificate;
    public $collegeTranscript;

    public $academicYears;

    public $courses;
    public $selectedCourseId = 0;

    public function mount($student) {
        $this->student = $student;
    }
    public function render()
    {

        $enrollmentYears = StudyYear::pluck('year', 'id');
        $entryTypes = EntryType::pluck('name', 'id');

        $enrollmentTypes = EnrollmentType::pluck('name', 'id');
        $sponsors = Sponsor::pluck('sponsor', 'id');
        $this->schools = Institution::where('institution_name', 'like', "%{$this->search}%")->get();

        $this->academicYears = $this->createAcademicYears();

        $this->courses = Course::pluck('name', 'id');

        return view('livewire.student.profile.educational-requirements-component',
        [
            'enrollmentYears' => $enrollmentYears,
            'selectedEnrollmentYearId' => $this->selectedEnrollmentYearId,
            'entryTypes' => $entryTypes,
            'selectedEntryTypeId' => $this->selectedEntryTypeId,
            'enrollmentTypes' => $enrollmentTypes,
            'selectedEnrollmentTypesId' => $this->selectedEnrollmentTypesId,
            'sponsors' => $sponsors,
            'selectedSponsorId' => $this->selectedSponsorId,
            'schools' => $this->schools,
            'years' => $this->academicYears,
            'fromOlevelYearId' => $this->fromOlevelYearId,
            'toOlevelYearId' => $this->toOlevelYearId,
            'courses' => $this->courses,
            'selectedCourseId' => $this->selectedCourseId,
        ]);
    }

    public function selectSchool($id){
        dd($id);
    }

    public function nextStep(): void
    {

        if ($this->currentStep == 3) {

            $formattedFromOlevelYear = $this->academicYears[$this->fromOlevelYearId];
            $formattedToOlevelYear = $this->academicYears[$this->toOlevelYearId];
            $formattedFromAlevelYear = $this->academicYears[$this->fromAlevelYearId];
            $formattedToAlevelYear = $this->academicYears[$this->toAlevelYearId];
            $formattedFromCollegeYear = $this->academicYears[$this->fromCollegeYearId];
            $formattedToCollegeYear = $this->academicYears[$this->toCollegeYearId];

            $ordinaryCertificateFile = null;
            $ordinaryTranscriptFile = null;
            $advancedCertificateFile = null;
            $advancedTranscriptFile = null;
            $collegeCertificateFile = null;
            $collegeTranscriptFile = null;

            if(!empty($this->ordinaryLevelCertificate)){
                $ordinaryCertificateFile = $this->ordinaryLevelCertificate->store('uploads', 'public');
            }
            if(!empty($this->advancedLevelCertificate)){
                $advancedCertificateFile = $this->advancedLevelCertificate->store('uploads', 'public');
            }
            if(!empty($this->collegeCertificate)){
                $collegeCertificateFile = $this->collegeCertificate->store('uploads', 'public');
            }
            if(!empty($this->ordinaryLevelTranscript)){
                $ordinaryTranscriptFile = $this->ordinaryLevelTranscript->store('uploads', 'public');
            }
            if(!empty($this->advancedLevelTranscript)){
                $advancedTranscriptFile = $this->advancedLevelCertificate->store('uploads', 'public');
            }
            if(!empty($this->collegeTranscript)){
                $collegeTranscriptFile = $this->collegeTranscript->store('uploads', 'public');
            }

            Qualification::create([
                'student_id' => $this->student->id,
                'ordinary_level_institution_id' => $this->selectedOrdinaryLevelSchoolId,
                'ordinary_level_id' => 1,
                'ordinary_level_certificate' => $ordinaryCertificateFile,
                'ordinary_level_start_year' => $formattedFromOlevelYear,
                'ordinary_level_end_year' => $formattedToOlevelYear,
                'advanced_level_institution_id' => $this->selectedAdvancedLevelSchoolId,
                'advanced_level_id' => 2,
                'advanced_level_certificate' => $advancedCertificateFile,
                'advanced_level_start_year' => $formattedFromAlevelYear,
                'advanced_level_end_year' => $formattedToAlevelYear,
                'college_level_institution_id' => $this->selectedCollegelId,
                'college_level_id' => 3,
                'college_level_certificate' => $collegeCertificateFile,
                'college_level_start_year' => $formattedFromCollegeYear,
                'college_level_end_year' => $formattedToCollegeYear,
            ]);

            Enrollment::create([
                'student_id' => $this->student->id,
                'course_id' => $this->selectedCourseId,
                'enrollment_year_id' => $this->selectedEnrollmentYearId,
                'entry_type_id' => $this->selectedEntryTypeId,
                'enrollment_type_id' => $this->selectedEnrollmentTypesId,
                'sponsor_id' => $this->selectedSponsorId ,
            ]);

            request()->session()->flash('education-details-saved', 'Enrollment and qualification information saved successfully.');
        }else {
            $this->currentStep++;
        }
    }

    public function previousStep(): void
    {
        $this->currentStep--;
    }

    #[On('ordinary-level-school-selected')]
    public function updatedSelectedOLevelSchool($id, $institution_name): void
    {
        $this->selectedOrdinaryLevelSchoolId = $id;
        $this->selectedOrdinaryLevelSchoolName = $institution_name;
    }

    #[On(event: 'advanced-level-school-selected')]
    public function updatedSelectedALevelSchool($id, $institution_name): void
    {
        $this->selectedAdvancedLevelSchoolId = $id;
        $this->selectedAdvancedLevelSchoolName = $institution_name;
    }

    #[On('college-selected')]
    public function updatedSelectedCollege($id, $institution_name){
        $this->selectedCollegelId = $id;
        $this->selectedACollegeName = $institution_name;
    }


    public function createAcademicYears(){
        $years = collect();  // Initialize an empty collection

        for ($year = 2024; $year >= 1980; $year--) {
            $years->put(2024 - $year + 1, (string)$year);
        }

        return $years;

    }
}
