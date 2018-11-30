<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Support\Facades\Response;
use Request;

/**
 * Class CustomerController
 * @package App\Http\Controllers
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Request::ajax()) {
            // Do API stuff
            return Response::json(Customer::all(), 200);
        }

        /*$cust = Customer::paginate(30);

        return $cust->results;*/

        //return 'index method of controller';
        //return view('customer.index')->with('customers', Customer::all());
        return view('customer.ctable')->with('customers', Customer::take(20)->get());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCustomerRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        return $validated;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($customer)
    {
        /*return 'edit';*/

        if (Request::ajax()) {
            // Do API stuff
            return 'api for customer edit';
        }
        return view('customer.edit', ['id' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {

        if (Request::ajax()) {
            // Do API stuff
            return 'api for customer delete';
        }


        //$customer = Customer::findOrFail($customer);
        $c = $customer;
        $customer->delete();

//        Request::flash('status', 'deleted');

        return back()->withInput()->with([
            'status' => $c . 'deleted successfully',
            'flash_message' => 'Deleted',
            'flash_message_important' => false
        ]);


    }
}
