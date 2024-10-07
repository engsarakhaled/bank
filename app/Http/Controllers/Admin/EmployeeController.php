<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=Employee::with('work')->get();
        return view('admin.employees',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $works=Work::select('id','work_name')->get(); 
        return view('admin.add_employee',compact('works'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'hiring_date'=>'required',
           'work_id' => 'required|integer|exists:works,id',
           'notes'=>'sometimes|string',
        ]);
        Employee::create($data);
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee=Employee::with('work')->FindorFail($id);
        $works = Work::select('id', 'work_name')->get();
         return view('admin.edit_employee',compact('employee','works'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'hiring_date'=>'required',
           'work_id' => 'sometimes|integer|exists:works,id',
           'notes'=>'sometimes|string',
        ]);
        Employee::where('id',$id)->update($data);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::where('id',$id)->delete();
        return redirect()->route('employees.index');
    }
}
