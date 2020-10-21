<?php

namespace App\Http\Livewire\Pages\Karyawan;

use Livewire\Component;

class KaryawanIndex extends Component
{

    public $employee_number, $employee_name, $gender;

    /**
     * giving validation rule
     */

    protected $rules = [
        'employee_number'   => 'required|min:10',
        'employee_name'     => 'required|min:5',
        'gender'            => 'required'
    ];

    /**
     * will run after render function
     */
    public function mount()
    {
        $this->resetData();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetData()
    {
        $this->employee_number = '';
        $this->employee_name = '';
        $this->gender = '';
    }

    public function render()
    {
        return view('livewire.pages.karyawan.karyawan-index');
    }

    public function addData() {
        $this->validate();
    }
}
