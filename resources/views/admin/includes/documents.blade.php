
<div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">All documents</h2>
            <a href="{{route('documents.create')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new document</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover display" id="_table">
                <thead>
                    <tr>
                        <th scope="col">Employee</th>
                        <th scope="col">Document Type</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Expire Date</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Employee Details</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                    <tr>
                        <td>{{$document->employee->name}}</td>
                        <td>{{$document->document_type}}</td>
                        <th scope="row">{{ $document->issue_date }}</th>
                        <th scope="row">{{ $document->expire_date }}</th>
                        <td>{{ Str::limit($document->notes, 20, $end='...') }}</td>
                        <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('documents.edit',$document->id)}}"><img src="{{asset('assets/admin/images/edit-svgrepo-com.svg')}}"></a></td>
                        <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('documents.show',$document->id)}}"><img src="{{asset('assets/admin/images/edit-svgrepo-com.svg')}}"></a></td>
                        <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('documents.delete',$document->id)}}" onclick="confirm('Are you sure you want to delete?')"><img src="{{asset('assets/admin/images/trash-can-svgrepo-com.svg')}}"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
