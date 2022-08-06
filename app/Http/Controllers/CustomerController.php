<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\customer_type;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
 public function create()
    {

        $customer_types = customer_type::all();
        return view("Customer.create", compact('customer_types'));
    }

    public function index()
    {
        $customers = DB::table('customer')
            ->join('customer_type','customer_type.id','=', 'customer.customer_type')
            ->select('customer.*','customer_type.description as customer_type')
            ->get();

        return view('customer.read', compact('customers'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Customer::create([

            'name' => $data['name'],
            'address' => $data['address'],
            'cell_pone' => $data['cell_pone'],
            'email' => $data['email'],
            'customer_type' => $data['customer_type'],

        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('customer-visualize')->with('success', 'Registro realizado exitosamente');
    }
}
