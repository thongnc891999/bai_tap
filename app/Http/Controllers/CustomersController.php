<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Repositories\CustomerRepository;

class CustomersController extends Controller
{
    protected $customerRepo;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepo = $customerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // cách 1
        // $customer = Customer::all(['name']);

        // cách 2


        $customer = $this->customerRepo->getAll();
        //Tạo ra 1 biến
        //gán giá trị của biến $name cho $data với key là name
        return view('admin.customers.index')->with(['customers' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('admin.customers.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name'      => $request->name,
            'email'     => $request->email,
            'address'   => $request->address,
            'birthday'  => $request->birthday,
            'gender'    => $request->gender,
            'tel'       => $request->tel,
            'country'   => $request->country
        ];

        Customer::create($data);

        return redirect()->route('customers.index');

        // $data = $request->only('name', 'email')
        // dd($request->all());
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
        $data = [];
        return view('admin.customers.show', $data);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::whereId($id)->first();
        // dd($customer);
    //    return view('admin.customers.edit', compact('customer', 'a'));
       return view('admin.customers.edit')->with([
            'customer' => $customer,
        ]);
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
        $data = [
            'name'      => $request->name,
            'email'     => $request->email,
            'address'   => $request->address,
            'birthday'  => $request->birthday,
            'gender'    => $request->gender,
            'tel'       => $request->tel,
            'country' => $request->country
        ];

        Customer::where('id', $id)->update($data);

        return redirect(route('customers.index'));
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
        return redirect(route('admin.customers.index'))->with('success','xóa thành công');
    }

}
