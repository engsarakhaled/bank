<div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add Work</h2>
      <form action="{{ route('works.store') }}" method="post" class="px-md-5">
        @csrf
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Work Name:</label>
          <div class="col-md-10">
            <input type="text" placeholder="e.g. Computer Science" class="form-control py-2" name="work_name" value="{{ old('work_name') }}"/>
            @error('work_name')
              <div class="alert alert-warning">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Work
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>