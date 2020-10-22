<?php

namespace App\Http\Livewire\Pages\Karyawan;

use Livewire\Component;
use App\Models\Karyawan;
class KaryawanIndex extends Component
{

    public $employeeData = [];
    public $show_update_form = false;
    /**
     * this is a global variable to work with 
     * wire:model="employee_number",
     * wire:model="employee_name"
     * wire:model="gender"
     */
    public $employee_number, $employee_name, $gender;

    /**
     * giving validation rule
     * this is a global validation rule
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
        $this->employeeData = Karyawan::all();
        $this->resetData();
    }

    /**
     * This function is to make real-time validation to form, when the user do a change
     */

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * this function will used to reset input field in a form with the wire:model
     */
    public function resetData()
    {
        $this->reset(['employee_number', 'employee_name', 'gender']);
    }

    public function render()
    {
        return view('livewire.pages.karyawan.karyawan-index', [
            'employees' => $this->employeeData
        ]);
    }

    /**
     * this function will used to add data to the karyawan table
     */

    public function addData()
    {
        // Run the validate function on addData
        $this->validate();

        $data = array(
            'employee_number' => $this->employee_number,
            'employee_name' => $this->employee_name,
            'gender' => $this->gender
        );

        // Insert data using Eloquent ORM
        Karyawan::create($data);

        // Update employeeData with a new Karyawan Data
        $this->employeeData = Karyawan::all();

        // Refresh input form
        $this->resetData();
    }

    /**
     * show Data that want to be update
     */

    public function showUpdateForm($employeeNumber)
    {
        $this->show_update_form = true;

        $karyawan = Karyawan::where('employee_number', $employeeNumber)->first();

        $this->employee_number = $karyawan->employee_number;
        $this->employee_name = $karyawan->employee_name;
        $this->gender = $karyawan->gender;
    }

    /**
     * Update data function
     */
    public function updateData()
    {
        $data = array(
            'employee_name' => $this->employee_name, 
            'gender' => $this->gender
        );

        Karyawan::where('employee_number', $this->employee_number)->where('status', 1)->update($data);

        $this->show_update_form = false;
        $this->resetData();
        $this->employeeData = Karyawan::all();
    }

    /**
     * Delete data function
     */
    public function deleteData($employeeNumber)
    {
        Karyawan::where('employee_number', $employeeNumber)->where('status', 1)->delete();

        $this->employeeData = Karyawan::all();
    }
}
