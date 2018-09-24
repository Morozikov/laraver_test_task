<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    //
    public function index()
    {
        return Company::with('users')->get();
    }

    public function show(Company $company)
    {
        return Company::with('users')->find($company->id);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return response()->json($company, 201);
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->all());

        return response()->json($company, 200);
    }

    public function delete(Company $company)
    {
        CompanyUser::delConnect('company_id',$company->id);
        $company->delete();

        return response()->json(null, 204);
    }
}
