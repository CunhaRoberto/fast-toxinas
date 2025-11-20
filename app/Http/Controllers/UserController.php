<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        // dd($request->all());

        $validated = $request->validate([
            'name'=>'required|min:2|max:200',
            'email'=>'required|email|min:5|max:200',
            'password'=>'required|min:4|max:200',
        ]);

        try{

            if($user->where('email', $validated['email'])->exists()){
                return back()->withInput()->withErrors([
                    'email'=> 'Esse email já foi cadastrado!'
                ]);
            }else{
                $user = $user->fill($validated);
                $user->password = Hash::make($validated['password']);
                $user->save();

                // return back()->with(
                //     'status', 'Sua conta foi criada com sucesso!'
                // );

                return redirect()->route('login')->with(
                    'status', 'Sua conta foi criada com sucesso!'
                );

            }
        }catch(\Exception $ex){
            return 'Erro inesperado ao realizar o cadastro!';
        }

        return 'Cadastro realizado com sucesso!';
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
