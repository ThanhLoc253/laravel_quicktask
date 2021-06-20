<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCustomer;

class CustomersController extends Controller
{   
    public function check($id)
    {
        $customers = Customers::find($id);

        if (empty($customers)) {
            return false;
        } else {
            return $customers;
        }
    }

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
        
        return redirect()->route('customers.index')
            ->with('success', trans('message.create_successfully'));
    }

    public function show($id)
    {
        $customers = $this->check($id);

        if ($customers) {
            return View('function.show', compact('customers'));
        } else {
            return redirect()->route('customers.index')
            ->with('danger', trans('message.danger'));
        } 
    }

    public function edit($id)
    {
        $customers = $this->check($id);

        if ($customers) {
            return View('function.edit', compact('customers'));
        } else {
            return redirect()->route('customers.index')
                ->with('danger', trans('message.danger'));
        }
    }

    public function update(RequestCustomer $request, $id)
    {   
        $customers = $this->check($id);
        if ($customers) {
            $customers->update($request->all());

            return redirect()->route('customers.index')
                ->with('success',trans('message.update'));
        } else {
            return redirect()->route('customers.index')
                ->with('danger', trans('message.danger'));
        }
    }

    public function destroy($id)
    {
        $customers = $this->check($id);

        if ($customers) {
            $customers->delete();

            return redirect()->route('customers.index')
                ->with('success', trans('message.delete'));
        }else{
            return redirect()->route('customers.index')
                ->with('danger', trans('message.danger'));
        }
    }
}
