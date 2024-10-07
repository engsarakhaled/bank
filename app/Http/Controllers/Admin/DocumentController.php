<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Employee;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::get();
        return view('admin.documents', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $documentTypes=Document::select('id','document_type')->get(); 
        $employees=Employee::select('id','name')->get(); 
        return view('admin.add_document',compact('documentTypes','employees'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $data=$request->validate([
                'document_type'=>'required|string',
                'issue_date'=>'required',
                'expire_date'=>'required|after:issue_date',
               'notes'=>'sometimes|string',
               'employee_id'=> 'required|integer|exists:employees,id',
            ]);
            Document::create($data);
            return redirect()->route('documents.index');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $document = Document::with('employee')->findOrFail($id);
        return view('admin.employee_details', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $document=Document::with('employee')->FindorFail($id);
        $employees = Employee::select('id', 'name')->get();
         return view('admin.edit_document',compact('document','employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'document_type'=>'required|string',
            'issue_date'=>'required',
            'expire_date'=>'required',
           'notes'=>'sometimes|string',
           'employee_id'=> 'sometimes|integer|exists:employees,id',
        ]);
        Document::where('id',$id)->update($data);
        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Document::where('id',$id)->delete();
        return redirect()->route('documents.index');
    }
}
