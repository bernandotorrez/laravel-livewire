<div>
    <form wire:submit.prevent="addData">
        <h2 class="alert alert-primary text-center">Add Data Employee</h2>
        <div class="form-group">
            <label for="employee_number">Employee Number</label>
            <input type="text" class="form-control" id="employee_number" 
            name="employee_number" placeholder="ESU12334" wire:model="employee_number">
            @error('employee_number') 
            <span class="error" style="color: red;"> {{ $message }} </span> 
            @enderror
        </div>
        <div class="form-group">
            <label for="employee_name">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" 
            name="employee_name" placeholder="Bernando Torrez" wire:model="employee_name">
            @error('employee_name') 
            <span class="error" style="color: red;"> {{ $message }} </span> 
            @enderror
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender" wire:model="gender">
                <option value=""> - Choose Gender - </option>
                <option value="M">Man</option>
                <option value="L">Ladies</option>
            </select>
            @error('gender') 
            <span class="error" style="color: red;"> {{ $message }} </span> 
            @enderror
        </div>

        <button class="btn btn-primary">Add</button>
    </form>

    <p></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> No </th>
                <th> Employee Number </th>
                <th> Employee Name </th>
                <th> Employee Gender </th>
            </tr>
        </thead>

        <tbody>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tbody>
    </table>
</div>
