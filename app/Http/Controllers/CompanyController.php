<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // گرفتن تمامی شرکت‌ها
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        // نمایش فرم برای اضافه کردن شرکت
        return view('companies.create');
    }

    public function store(Request $request)
    {
        // اعتبارسنجی داده‌ها
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email',
            'website' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // ذخیره کردن شرکت جدید
        Company::create($request->all());
        return redirect()->route('companies.index')->with('success', 'شرکت با موفقیت اضافه شد.');
    }

    public function show(Company $company)
    {
        // نمایش جزئیات یک شرکت
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        // نمایش فرم برای ویرایش اطلاعات یک شرکت
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        // اعتبارسنجی داده‌ها
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email,' . $company->id,
            'website' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // بروزرسانی اطلاعات شرکت
        $company->update($request->all());
        return redirect()->route('companies.index')->with('success', 'شرکت با موفقیت ویرایش شد.');
    }

    public function destroy(Company $company)
    {
        // حذف یک شرکت
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'شرکت با موفقیت حذف شد.');
    }
}
