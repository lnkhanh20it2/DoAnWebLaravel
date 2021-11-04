<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $data = Account::orderBy('created_at','DESC')->paginate(10);
    //     return view('admin.account.index',compact('data'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {   
    //     return view('admin.account.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $data=$request->validate([
    //         'name' => 'required',
    //         'email'=> 'required|email|unique:account',
    //         'password'=>'required',
    //         'conform_password'=>'required|same:password',
    //         'phone'=>'required',
    //         'address'=>'required',
    //     ],
    //     [
    //         'name.required' => 'Name not null',
    //         'email.required' => 'Email not null',
    //         'password.required' => 'Password not null',
    //         'email.unique' => 'Email in database',
    //         'email.email' => 'Email not form',
    //         'phone.required' => 'Phone not null',
    //         'conform_password.same'=>'Enter password',
    //         'address.required' => 'Address not null',
    //         'conform_password.required' => 'Enter password',
    //     ]
    //     );
    //     $password = bcrypt($request->password);
    //     $request->merge(['password' => $password]);

    //     $account = new  Account();
    //     $account->name = $request['name'];
    //     $account->email = $request['email'];
    //     $account->password = $request['password'];
    //     $account->phone = $request['phone'];
    //     $account->address = $request['address'];
    //     $account->save();
    //     return redirect()->back()->with('status','Thêm account thành công ');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Account  $account
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Account $account)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Account  $account
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Account $account)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Account  $account
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Account $account)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Account  $account
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Account $account)
    // {
    //     //
    // }
}
