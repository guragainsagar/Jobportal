<?php

namespace App\Http\Controllers;

use App\Models\CompanySubscription;
use Illuminate\Http\Request;

class CompanySubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $companysubscription =  CompanySubscription::get();
        return view('company_subscription.index',['companysubscriptions' => $companysubscription]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
          return view('company_subscription.create');

        //  = CompanyCategory::all();

        // return view('company.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function show(CompanySubscription $companySubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanySubscription $companySubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanySubscription $companySubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanySubscription $companySubscription)
    {
        //
    }
}
