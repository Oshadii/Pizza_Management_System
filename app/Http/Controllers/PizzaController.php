<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas=Pizza::all();
        return view("pages.home.index")->with('pizzas',$pizzas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $input=$request->all();
        //Pizza::create($input);
        //return redirect('pizza')->with('flash_message','Pizza Addedd!!');
        $requestData=$request->all();
        $fileName=time().request()->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('images',$fileName,'public');
        $requestData["photo"]='/storage/'.$path;
        Pizza::create($requestData);
        return redirect('pizza');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizza=Pizza::find($id);
        return view('pages.home.show')->with('pizzas',$pizza);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza=Pizza::find($id);
        return view('pages.home.edit')->with('pizzas',$pizza);
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
        $pizza=Pizza::find($id);
        $input=$request->all();
        $pizza->update($input);
        return redirect('pizza')->with('flash_message','pizza updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pizza::destroy($id);
        return redirect('pizza')->with('flash_message','Pizza deleted!!');
    }
}
