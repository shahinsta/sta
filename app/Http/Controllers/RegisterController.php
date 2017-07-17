<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\View;
use Session;

class RegisterController extends Controller
{
    public function delete(Request $request)
    {

        if ($request->isMethod('post')) {
            Customer::destroy($request->input('customerid'));
            return $request->input('customerid');
        }
    }
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $Customer = Customer::find($request->input('customerid'));
//            var_dump($request->input("name"));
//            $Customer->name =$request->input("name");
//            $Customer->age = $request->input('age');
//            $Customer->mobile = $request->input('mobile');
//            $Customer->email = $request->input('email');
//            $Customer->save();
            Customer::where('id','=',$request->input('customerid'))->update(['name' => $request->input('name'),'age' => $request->input('age'),'mobile' => $request->input('mobile'),'email' => $request->input('email')]);

           return $request->input('customerid');
        }
    }

    public function insert(Request $request)
    {
        if ($request->isMethod('post')) {

            $name = $request->input('name');
            $age = $request->input('age');
            $mobile = $request->input('mobile');
            $email = $request->input('email');

            //Check that Fields in Register Form is Fill or No...
            if ($name != "" && $age != "" && $mobile != "" && $email != "") {

                //Check for Exists User...
                if (Customer::where('email', '=', $email)->exists()) {
                    //if (View::exists('register')) {
                    $data['report'] = Customer::all();
                    $data['alert'] = array('comment' => 'This Account Already Registered', 'display' => 'card-panel', 'color' => ' amber accent-4');
                    return view('register', $data);
//                    }
//                    else {
//                        return view('test');
//                    }
                    //Add to DB
                } else {
                    $customer = new Customer();

                    $customer->name = $name;
                    $customer->age = $age;
                    $customer->mobile = $mobile;
                    $customer->email = $email;
                    $customer->save();
                    $data['report'] = Customer::all();
                    $data['alert'] = array('comment' => 'New Customer Information Saved Successfully', 'display' => 'card-panel', 'color' => ' green darken-2');
                    Session::put('comment', 'New Customer Information Saved Successfully');
                    //$_SESSION['comment'] = 'New Customer Information Saved Successfully';
                    return redirect('/register');
                }
                //Create Empty Section to Red
            } else {
                if ($name == "") {
                    $data['req']['name'] = '';
                } else {
                    $data['req']['name'] = $name;
                }
                if ($age == "") {
                    $data['req']['age'] = '';
                } else {
                    $data['req']['age'] = $age;
                }
                if ($mobile == "") {
                    $data['req']['mobile'] = '';
                } else {
                    $data['req']['mobile'] = $mobile;
                }
                if ($email == "") {
                    $data['req']['email'] = '';
                } else {
                    $data['req']['email'] = $email;
                }

//              $data['req'] = $request->all();
                $data['report'] = Customer::all();
                $data['alert'] = array('comment' => 'Please Fill Red Section', 'display' => 'card-panel', 'color' => ' red darken-2');
                return view('register', $data);
            }

        } else {
            $data['comment'] = Session::get('comment');
            //Get Report...
            $data['report'] = Customer::all();
//            dd($data['report']);
            return view('register', $data);
        }

    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return Redirect::route('register.insert');
    }
}
