<div>
    <form @if($show_update_form == false) wire:submit.prevent="addData" @else wire:submit.prevent="updateData" @endif>
        <h2 class="alert alert-primary text-center">Add Data Employee</h2>
        <div class="form-group">
            <label for="employee_number">Employee Number</label>
            <input type="text" class="form-control" id="employee_number" 
            name="employee_number" placeholder="ESU12334" wire:model.debounce.500ms="employee_number"
            @if($show_update_form == true) readonly @endif>
            @error('employee_number') 
            <span class="error" style="color: red;"> {{ $message }} </span> 
            @enderror
        </div>
        <div class="form-group">
            <label for="employee_name">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" 
            name="employee_name" placeholder="Bernando Torrez" wire:model.debounce.500ms="employee_name">
            @error('employee_name') 
            <span class="error" style="color: red;"> {{ $message }} </span> 
            @enderror
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender" wire:model.lazy="gender">
                <option value=""> - Choose Gender - </option>
                <option value="M">Man</option>
                <option value="L">Ladies</option>
            </select>
            @error('gender') 
            <span class="error" style="color: red;"> {{ $message }} </span> 
            @enderror
        </div>

        @if($show_update_form == false)
        <button class="btn btn-primary">Add</button>
        @else
        <button class="btn btn-success">Update</button>
        @endif
    </form>

    <p></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> No </th>
                <th> Employee Number </th>
                <th> Employee Name </th>
                <th> Employee Gender </th>
                <th> Action </th>
            </tr>
        </thead>

        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $employee->employee_number }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->gender }}</td>
                <td> <button class="btn btn-success" wire:click="showUpdateForm('{{$employee->employee_number}}')"> Edit </button> | 
                <button class="btn btn-danger" wire:click="deleteData('{{$employee->employee_number}}')"> Delete </button> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
