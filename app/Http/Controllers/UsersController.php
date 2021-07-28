<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users_details = Detail::all();       
        
        return view('user.index', ['users'=>$users_details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_detail = new Detail();

        return view('user.create', ['user'=>$user_detail]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|alpha',
            'email'=>'required|email',
            'edad'=>'required|numeric',
            'sexo'=>'required|alpha',
            'pais'=>'required|alpha',
            'apellido'=>'required|alpha',
        ]);

        $user_detail = new Detail();
        $user_detail->nombre = $request->nombre;
        $user_detail->apellido = $request->apellido;
        $user_detail->email = $request->email;
        $user_detail->edad = $request->edad;
        $user_detail->sexo = $request->sexo;
        $user_detail->pais = $request->pais;

        if($user_detail->save()){
            return redirect('/users');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_detail = Detail::find($id);

        return view('user.show', ['user'=>$user_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_detail = Detail::find($id);

        return view('user.edit', ['user'=>$user_detail]);
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
        $request->validate([
            'nombre'=>'required|alpha',
            'email'=>'required|email',
            'edad'=>'required|numeric',
            'sexo'=>'required|alpha',
            'pais'=>'required|alpha',
            'apellido'=>'required|alpha',
        ]);

        $user_detail = Detail::find($id);

        if($user_detail){
            $user_detail->nombre = $request->nombre;
            $user_detail->apellido = $request->apellido;
            $user_detail->email = $request->email;
            $user_detail->edad = $request->edad;
            $user_detail->sexo = $request->sexo;
            $user_detail->pais = $request->pais;

            if($user_detail->save()){
                return redirect('/users');
            }
        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_detail = Detail::find($id);

        if($user_detail){
            $user_detail->delete();
        }

        return back();
    }
}
