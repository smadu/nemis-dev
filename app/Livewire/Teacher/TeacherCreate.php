<?php

namespace App\Livewire\Teacher;

use App\Models\AppointmentCategorie;
use App\Models\BloodGroup;
use App\Models\CivilStatus;
use App\Models\DistrictsList;
use App\Models\DivisionalSecretariatOffice;
use App\Models\Ethnicity;
use App\Models\GenderList;
use App\Models\GnDivision;
use App\Models\InstitutionType;
use App\Models\OfficeLevel;
use App\Models\Position;
use App\Models\Service;
use App\Models\ServiceRank;
use App\Models\Title;
use App\Models\Workplaces;
use Livewire\Component;
use Livewire\Attributes\Validate;

class TeacherCreate extends Component
{
    // Form fields
    // Personal Details
    #[Validate('required|string|max:10')]
    public $title;

    #[Validate('required|string|max:255')]
    public $fullName;

    #[Validate('required|string')]
    public $gender;

    #[Validate('required|date')]
    public $birthday;

    #[Validate('required|string|max:50')]
    public $ethnicity;

    #[Validate('required|string')]
    public $civilStatus;

    #[Validate('required|string')]
    public $bloodGroup;

    #[Validate('required|string')]
    public $healthCondition;

    #[Validate('required|string|max:20|unique:people,nic')]
    public $nic;

    //Contact Details
    #[Validate('required|string|max:10|unique:people,phone')]
    public $contact;

    #[Validate('required|email|unique:people,email')]
    public $email;

    #[Validate('required|string|max:100')]
    public $district;

    #[Validate('required|string|max:100')]
    public $divisionalDecretaryOffice;

    #[Validate('required|string|max:100')]
    public $gnDivision;

    #[Validate('required|string|max:255')]
    public $addressLine1;

    #[Validate('nullable|string|max:255')]
    public $addressLine2;

    #[Validate('nullable|string|max:255')]
    public $addressLine3;

    #[Validate('nullable|string|max:10')]
    public $postalCode;

    // Appointment Details
    #[Validate('required|date')]
    public $firstAppointmentDate;

    #[Validate('required|string|max:20')]
    public $appointmentLetterNo;

    #[Validate('required|string|max:50')]
    public $service;

    #[Validate('required|string|max:50')]
    public $serviceRank;

    #[Validate('required|string|max:50')]
    public $institutionType;

    #[Validate('required|string|max:50')]
    public $officeLevel;

    #[Validate('required|string|max:50')]
    public $office;

    #[Validate('required|string|max:50')]
    public $appointmentCategory;



    public $titleOptions = [];
    public $genderOptions = [];
    public $ethnicityOptions = [];
    public $healthConditionOptions = [];
    public $civilStatusOptions = [];
    public $bloodGroupOptions = [];
    public $districtOption = [];
    public $divisionalSecretaryofficeOption = [];
    public $gnDivisionOption = [];

    public $servicesOption = [];
    public $ranksOption = [];
    //public $positionsOption = [];
    public $institutionTypeOption = [];
    public $officeLevelsOption = [];
    public $officesOption = [];
    public $appointmentCategoriesOption = [];


    public function mount()
    {
        $this->titleOptions = Title::all();
        $this->genderOptions = GenderList::all();
        $this->ethnicityOptions = Ethnicity::all();
        $this->civilStatusOptions = CivilStatus::all();
        $this->bloodGroupOptions = BloodGroup::all();
        $this->healthConditionOptions = [
            '1' => 'Yes',
            '0'  => 'No',
        ];
        $this->districtOption = DistrictsList::orderBy('district_name', 'asc')->get();

        $this->servicesOption = Service::where('service_id', 'SER001')->get();
        
        //$this->positionsOption = Position::all();
        $this->institutionTypeOption = InstitutionType::all();
        $this->officeLevelsOption = OfficeLevel::all();
        $this->officesOption = Workplaces::all();
        $this->appointmentCategoriesOption = AppointmentCategorie::all();
    }

    public function updatedDistrict($value){
        //dd('hi');
        $this->divisionalSecretaryofficeOption = DivisionalSecretariatOffice::where('district_id', $value)->orderBy('dso_name', 'asc')->get();
    }

    public function updatedDivisionalDecretaryOffice($value){
        //dd('hi');
        $this->gnDivisionOption = GnDivision::where('dso_id', $value)->orderBy('gn_division_name', 'asc')->get();
    }

    public function updatedService($value){
        $this->ranksOption = ServiceRank::where('service_id', $value)->get();
    }

    public function updatedOfficeLevel(){
       // $this->ranksOption = ServiceRank::where('service_id', $value)->get();
    }



    public function save()
    {
        // Validation
        $this->validate();

        // Reset form
        $this->reset();

        // Success message
        session()->flash('success', 'Teacher created successfully!');
    }

    public function render()
    {
        return view('livewire.teacher.teacher-create');
    }
}
