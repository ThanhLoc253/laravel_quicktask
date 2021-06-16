<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCustomer;

class customersController extends Controller
{
    public function index()
    {
        $customers = Customers::latest()->paginate(config('app.paginate'));

        return View('function.index', compact(('customers')));
    }
    public function create()
    {
        return View('function.create');
    }
    public function store(RequestCustomer $request)
    {
        Customers::create($request->all());
        
        return redirect()->route('index')
            ->with('success', trans('message.create_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
