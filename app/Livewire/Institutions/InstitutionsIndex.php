<?php

namespace App\Livewire\Institutions;

use App\Models\Institution;
use Livewire\Component;

class InstitutionsIndex extends Component
{
    public function render()
    {
        $institutions = Institution::paginate(50); // 50 items per page
        //dd($institutions);
        return view('livewire.institutions.institutions-index', compact('institutions'));
    }
}
