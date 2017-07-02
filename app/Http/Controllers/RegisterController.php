<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\View;

class RegisterController extends Controller
{
    public function del_sta(Request $request)
    {

        if ($request->isMethod('post')) {
            Customer::destroy($request->input('customerid'));
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
                    return view('register', $data);
                }
                //Create Empty Section to Red
            } else {
                if ($name == "") {
                    $data['req']['name'] = 'empty';
                } else {
                    $data['req']['name'] = $name;
                }
                if ($age == "") {
                    $data['req']['age'] = 'empty';
                } else {
                    $data['req']['age'] = $age;
                }
                if ($mobile == "") {
                    $data['req']['mobile'] = 'empty';
                } else {
                    $data['req']['mobile'] = $mobile;
                }
                if ($email == "") {
                    $data['req']['email'] = 'empty';
                } else {
                    $data['req']['email'] = $email;
                }

//              $data['req'] = $request->all();
                $data['report'] = Customer::all();
                $data['alert'] = array('comment' => 'Please Fill Red Section', 'display' => 'card-panel', 'color' => ' red darken-2');
                return view('register', $data);
            }

        } else {

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
