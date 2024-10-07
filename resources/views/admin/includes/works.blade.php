<div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">All Work</h2>
            <a href="{{route('works.create')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new work</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover display" id="_table">
                <thead>
                    <tr>
                        <th scope="col">Created At</th>
                        <th scope="col">Work</th>
                    </tr>
                </thead>
                
                <tbody>
                  @foreach ($works as $work)
                    <tr> 
                        <th scope="row">{{ $work->created_at->format('d M Y') }}</th>  
                        <td>{{ $work->work_name }}</td>                           
                    </tr>
                    @endforeach
                </tbody>
              
            </table>
        </div>
    </div>
</div>
</main>