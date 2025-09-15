<?php

namespace App\Livewire\Employers;

use App\Models\User;
use Livewire\Component;

class EmployerIndex extends Component
{
    use \Livewire\WithPagination;

    public $sortBy = 'date';
    public $sortDirection = 'desc';

    public $users = [];

    public function sort($column) {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        $this->users = User::get();
        return view('livewire.employers.employer-index', [
            'employers' => $this->users
        ]);
    }
}
