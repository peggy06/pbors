<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
use App\Models\Company;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyStoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        $data = $request->all();
        $data['logo_path'] = $request->file('logo_path')->store("public/company_logos");
        Company::create($data);
        return redirect()->route('admin.company.index')->with('success', 'Successfully created a new Company!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyStoreRequest|Request $request
     * @param Company $company
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(CompanyUpdateRequest $request, Company $company)
    {
        $data = $request->all();
        if ($request->file('logo_path')) {
            $data['logo_path'] = $request->file('logo_path')->store("public/company_logos");
        }
        $company->update($data);
        return redirect()->route('admin.company.index')->with('success', 'Successfully updated Company!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
