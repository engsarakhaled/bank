<div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">Employee Details </h2>
            <a href="{{route('employees.create')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new employee</a>
        </div>
        <div class="p-5">
          <div class="container-fluid g-0 pt-3 pb-5 px-lg-5 px-md-3 px-1">
              <div class="mx-auto pt-4" style="max-width: 1225px">
                  <article class="mx-md-4">
                      <h3>Name:   {{ $document->employee->name }}</h3>
                      <p>Hiring Date:   {{ $document->employee->hiring_date }}</p>
                      <p>Job:   {{ $document->employee->work->work_name }}</p>
                      <p>Notes for Employee:   {{ $document->employee->notes }}</p>
                      <p>Document Type:   {{ $document->document_type }}</p>
                      <p>Issue Date:   {{ $document->issue_date }}</p>
                      <p>Expire Date:   {{ $document->expire_date }}</p>
                      <p>Notes for Document:   {{ $document->notes }}</p>
                      <div class="text-md-end">
                          <a class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5" href="{{ route('employees.index') }}">
                              Back to All Employees
                          </a>
                      </div>
                  </article>
              </div>
          </div>
      </div>
  </div>
</div>