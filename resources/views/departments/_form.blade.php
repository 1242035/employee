<div class="form-group">
    <label for="name" class="col-md-3 control-label">Department Name</label>
    <div class="col-md-8">
        <input type="text" class="form-control" name="name" value="{{ $department->name }}">
    </div>
</div>

<div class="form-group">
    <label for="office_number" class="col-md-3 control-label">Office Phone</label>
    <div class="col-md-8">
        <input type="text" class="form-control" name="office_number" value="{{ $department->office_number }}">
    </div>
</div>

<div class="form-group">
    <label for="employee" class="col-md-3 control-label">Manager</label>
    <div class="col-md-8">
      <select class="form-control" id="employee" name="employee">
        @foreach ($employees as $employee)
          <option value="{{ $employee }}">{{ $employee }}</option>
        @endforeach
      </select>
    </div>
</div>