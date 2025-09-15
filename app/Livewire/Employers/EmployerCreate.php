<?php

namespace App\Livewire\Employers;

use Illuminate\Database\QueryException;   // DB error
use Exception;                            // General errors
use App\Models\Employer;
use App\Models\People;
use Livewire\Component;

class EmployerCreate extends Component
{
    public $full_name;
    public $nic;
    public $email;
    public $phone;
    public $address;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'nic' => 'required|string|min:10|max:12|unique:employers,nic',
        'email' => 'required|email|unique:employers,email',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
    ];

    public function save()
    {
        // Validate inputs
        $this->validate();
        try {
            // Create employer
            People::create([
                'full_name' => $this->full_name,
                'nic' => $this->nic,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
            ]);

            // Reset form
            $this->reset();

            // Success message
            session()->flash('success', 'Employer created successfully!');
        } catch (QueryException $e) {
            // Database-level errors (e.g., duplicate NIC/email, DB connection issue)
            session()->flash('error', 'Database error: ' . $e->getMessage());
        } catch (Exception $e) {
            // Any other errors
            session()->flash('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.employers.employer-create');
    }
}
