<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Repositories\CustomerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends AppBaseController
{
    /** @var  CustomerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    public function index()
    { 
        $customers = Customer::orderBy('id', 'DESC')->paginate(5);

        return view('admin.customer.index', compact('customers'));
    }

    public function getAdd()
    {
        return view('admin.customer.add');
    }

    public function postAdd(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $password = bcrypt($request->username);
        $fullname = $request->fullname;
        $address = $request->address;
        $phone = $request->phone;

        $check_has_account = User::where('email', $email)->first();

        if ($check_has_account == null) {
            $add_account = User::insert([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role_id' => 3,
                'active' => 1
            ]);

            if ($add_account) {
                $user_id = User::where('email', $email)->first()->id; 
                $add_garage = Customer::insert([
                    'fullname' => $fullname,
                    'address' => $address,
                    'phone' => $phone,
                    'user_id' => $user_id
                ]);
                
                return redirect()->route('admin.customer')->with('msg', 'Add customer success!');
            }
        } else {
            return redirect()->route('admin.customer.add')->with('msg', 'User has avaiable!');
        }
    }

    public function getEdit($id)
    {
        $customer = Customer::find($id); 

        return view('admin.customer.edit', compact('customer'));
    }

    public function postEdit($id, Request $request)
    {
        $fullname = $request->fullname;
        $address = $request->address;
        $phone = $request->phone;
        $proprietor = $request->proprietor;

        $result = Customer::where('id', $id)->update([
            'fullname' => $fullname,
            'address' => $address,
            'phone' => $phone,
        ]);
        if ($result) {
            return redirect()->route('admin.customer')->with('msg', 'Update customer success!');
        } else {
            return redirect()->route('admin.customer')->with('msg', 'Have error update customer!');
        }
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $result = Customer::where('id', $id)->delete();
        if ($result) {
            $delete_account = User::where('id', $customer->user_id)->delete();

            return redirect()->route('admin.customer')->with('msg', 'Delete customer success!');
        } else {

            return redirect()->route('admin.customer')->with('msg', 'Have error delete customer!');
        }
    }

    /**
     * Display a listing of the Customer.
     *
     * @param Request $request
     *
     * @return Response
     */
    // public function index(Request $request)
    // {
    //     $customers = $this->customerRepository->all();

    //     return view('customers.index')
    //         ->with('customers', $customers);
    // }

    // /**
    //  * Show the form for creating a new Customer.
    //  *
    //  * @return Response
    //  */
    // public function create()
    // {
    //     return view('customers.create');
    // }

    // /**
    //  * Store a newly created Customer in storage.
    //  *
    //  * @param CreateCustomerRequest $request
    //  *
    //  * @return Response
    //  */
    // public function store(CreateCustomerRequest $request)
    // {
    //     $input = $request->all();

    //     $customer = $this->customerRepository->create($input);

    //     Flash::success('Customer saved successfully.');

    //     return redirect(route('customers.index'));
    // }

    // /**
    //  * Display the specified Customer.
    //  *
    //  * @param int $id
    //  *
    //  * @return Response
    //  */
    // public function show($id)
    // {
    //     $customer = $this->customerRepository->find($id);

    //     if (empty($customer)) {
    //         Flash::error('Customer not found');

    //         return redirect(route('customers.index'));
    //     }

    //     return view('customers.show')->with('customer', $customer);
    // }

    // /**
    //  * Show the form for editing the specified Customer.
    //  *
    //  * @param int $id
    //  *
    //  * @return Response
    //  */
    // public function edit($id)
    // {
    //     $customer = $this->customerRepository->find($id);

    //     if (empty($customer)) {
    //         Flash::error('Customer not found');

    //         return redirect(route('customers.index'));
    //     }

    //     return view('customers.edit')->with('customer', $customer);
    // }

    // /**
    //  * Update the specified Customer in storage.
    //  *
    //  * @param int $id
    //  * @param UpdateCustomerRequest $request
    //  *
    //  * @return Response
    //  */
    // public function update($id, UpdateCustomerRequest $request)
    // {
    //     $customer = $this->customerRepository->find($id);

    //     if (empty($customer)) {
    //         Flash::error('Customer not found');

    //         return redirect(route('customers.index'));
    //     }

    //     $customer = $this->customerRepository->update($request->all(), $id);

    //     Flash::success('Customer updated successfully.');

    //     return redirect(route('customers.index'));
    // }

    // /**
    //  * Remove the specified Customer from storage.
    //  *
    //  * @param int $id
    //  *
    //  * @throws \Exception
    //  *
    //  * @return Response
    //  */
    // public function destroy($id)
    // {
    //     $customer = $this->customerRepository->find($id);

    //     if (empty($customer)) {
    //         Flash::error('Customer not found');

    //         return redirect(route('customers.index'));
    //     }

    //     $this->customerRepository->delete($id);

    //     Flash::success('Customer deleted successfully.');

    //     return redirect(route('customers.index'));
    // }
}
