<?php

namespace App\Http\Controllers;

use App\Company;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  List all the companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $companies = Company::get();
        return view('company.list', compact('companies'));
    }

    /**
     * Display a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        return view('company.view', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function newCompany()
    {
        return view('company.new');
    }

    public function create(Request $request, Company $company)
    {
        $arr = $request->all();
        $companyItem = $company->create($arr);
        return Redirect::to("/company/{$companyItem->id}");
    }

    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->only(['name']));
        return Redirect::to("/company/{$company->id}");
    }

    public function deleteCompany(Company $company)
    {
        $company->delete();
        return redirect('');
    }
}
