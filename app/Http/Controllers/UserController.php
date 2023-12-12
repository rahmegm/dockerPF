<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;
    public function __construct(){

        $this->user = new User();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $users = $this->user->all();
        return view('users',['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view:'user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->user->create([

            'firstName' => @request->input(key:'firstname'),
            'lastname' => @request->input(key:'lastname'),
            'email' => @request->input(key:'email'),
            'password' => password+hash(@request->input(key:'password'), PASSWORD_DEFAULT)
        ]);

        if ($created) {

            return redirect()->back()->with('message','success');
    
        }

        return redirect()->back()->with('message','error');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
