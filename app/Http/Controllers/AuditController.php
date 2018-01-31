<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Audit;
use App\Company;
use Auth;

class AuditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Request $request)
    {
        $audits = Audit::get();
        $companies = Company::get();
        $countries = Config::get('constants.countries');
        return view('audit.list', compact('audits', 'companies', 'countries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Audit $audit)
    {
        #$audits = Audit::get();
        $company = Company::find($audit->company_id);
        $country = Config::get('constants.countries')[$audit->country];
        return view('audit.view', compact('audit', 'company', 'country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newAudit()
    {
        $companies = Company::orderBy('name')->pluck('name', 'id')->toArray();
        $countries = Config::get('constants.countries');
        return view('audit.new')
            ->with(
                [
                    'countries' => $countries,
                    'companies' => $companies
                ]
            );
    }

    public function create(Request $request, Audit $audit)
    {
        $arr = $request->all();
        $arr['date'] = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $arr['date'])));
        $auditItem = $audit->create($arr);
        return Redirect::to("/audit/{$auditItem->id}");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Audit $audit)
    {
        $company = Company::find($audit->company_id);
        $country = Config::get('constants.countries')[$audit->country];
        $companies = Company::orderBy('name')->pluck('name', 'id')->toArray();
        $countries = Config::get('constants.countries');
        return view('audit.edit', compact('audit', 'company', 'country', 'companies', 'countries'));
    }

    public function update(Request $request, Audit $audit)
    {
        $arr = $request->all();
        $arr['date'] = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $arr['date'])));
        $audit->update($arr);
        return Redirect::to("/audit/{$audit->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
