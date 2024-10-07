
<div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">All employees</h2>
            <a href="{{route('employees.create')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new employee</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover display" id="_table">
                <thead>
                    <tr>
                        <th scope="col">Hiring Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Job</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->hiring_date }}</th>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->work->work_name}}</td> 
                        <td>{{ Str::limit($employee->notes, 20, $end='...') }}</td>
                        <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('employees.edit',$employee->id)}}"><img src="{{asset('assets/admin/images/edit-svgrepo-com.svg')}}"></a></td>
                        <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('employees.delete',$employee->id)}}" onclick="confirm('Are you sure you want to delete?')"><img src="{{asset('assets/admin/images/trash-can-svgrepo-com.svg')}}"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
