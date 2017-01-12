<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Notifiable;

class UserController extends Controller
{
    //display data
    public function index()
    {
        //create index function
        //show all data from user table
        $user = User::all();
//      $user = DB::table('users')->paginate(15);
        $user = User::with('role')->get();
        return view('management.user', compact('user'));
    }

    public function create(Request $request) {
        return view('management.createuser');
    }
//
//    public function store(Request $request)
//    {
//
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//
//    }
//
    //update user
    public function update(Request $request, $id)
    {
        $user->update($request->all());
        return redirect('management.user')->with('message', 'User removed!');
    }

    //remove specific user
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('management.user');
    }
}
