<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('employees.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:6',
            'company_id' => 'required|exists:companies,id',
            'position' => 'nullable|string|max:255',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'کارمند با موفقیت اضافه شد.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();
        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'company_id' => 'required|exists:companies,id',
            'position' => 'nullable|string|max:255',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'کارمند با موفقیت ویرایش شد.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'کارمند با موفقیت حذف شد.');
    }
}
