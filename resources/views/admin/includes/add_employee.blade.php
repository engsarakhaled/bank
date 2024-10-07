<div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add Employee</h2>
      <form action="{{route('employees.store')}}" method="post" class="px-md-5" >
        @csrf
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-10">
            <input type="text" placeholder="e.g. Design Patterns" class="form-control py-2" name="name" value="{{ old('name') }}" />
            @error('name')
             <div class="alert alert-warning">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Hiring Date:</label>
          <div class="col-md-10">
            <input type="date"  placeholder="Enter time" class="form-control py-2" name="hiring_date" value="{{ old('hiring_date') }}" />
            @error('hiring_date')
            <div class="alert alert-warning">{{ $message }}</div>
           @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Work:</label>
          <div class="col-md-10">
            <select name="work_id" id="" class="form-control py-1">
              @error('work_id')
                <div class="alert alert-warning">{{ $message }}</div>
              @enderror
                <option value="">Select Work</option>
              @foreach ($works as $work)
                 <option value="{{ $work->id }}"@selected(old('work->id') == $work->id)>
                  {{ $work->work_name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Notes:</label>
          <div class="col-md-10">
            <textarea name="notes" id="" rows="5" class="form-control">{{ old('notes') }}</textarea>
            @error('notes')
             <div class="alert alert-warning">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Employee
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
