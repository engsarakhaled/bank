<div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Edit document</h2>
      <form action="{{ route('documents.update',$document->id) }}" method="post" class="px-md-5">
        @csrf
        @method('put')
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Issue Date:</label>
          <div class="col-md-10">
            <input type="date" placeholder="Enter time" class="form-control py-2" name="issue_date" value="{{ old('issue_date',$document->issue_date) }}" />
            @error('issue_date')
            <div class="alert alert-warning">{{$message}}</div>
           @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Expire Date:</label>
          <div class="col-md-10">
            <input type="date" placeholder="Enter time" class="form-control py-2" name="expire_date" value="{{ old('expire_date',$document->expire_date) }}" />
            @error('expire_date')
            <div class="alert alert-warning">{{$message}}</div>
           @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Document Type:</label>
          <div class="col-md-10">
              <select name="document_type" id="document_type" class="form-control py-1">
                  @error('document_type')
                      <div class="alert alert-warning">{{ $message }}</div>
                  @enderror
                  <option value="id_card" {{ old('document_type', $document->document_type) == 'ID_Card' ? 'selected' : '' }}>ID Card</option>
                  <option value="passport" {{ old('document_type', $document->document_type) == 'Passport' ? 'selected' : '' }}>Passport</option>
                  <option value="contract" {{ old('document_type', $document->document_type) == 'Contract' ? 'selected' : '' }}>Contract</option>
              </select>
          </div>
      </div>
      <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Employee:</label>
          <div class="col-md-10">
              <select name="employee_id" id="" class="form-control py-1">
                  @error('employee_id')
                      <div class="alert alert-warning">{{ $message }}</div>
                  @enderror
                  <option value="">Select Employee</option>
                  @foreach ($employees as $employee)
                      <option value="{{ $employee->id }}" {{ old('employee_id', $document->employee_id) == $employee->id ? 'selected' : '' }}>{{ $employee->name }}</option>
                  @endforeach
              </select>
          </div>
      </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Notes:</label>
          <div class="col-md-10">
            <textarea name="notes" id="" rows="5" class="form-control">{{ old('notes',$document->notes) }}</textarea>
            @error('notes')
             <div class="alert alert-warning">{{ $message }}</div>
            @enderror
          </div>
        </div>    
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit Employee
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
 