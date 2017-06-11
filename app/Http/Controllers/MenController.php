<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Men;
use Session;

class MenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mens = Men::where('user_id', Auth::id())->get();
        return view('mens.index')->withMens($mens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'title'=> 'required|max:255',
                'name' => 'required|max:255',
                'nic'=> 'required|max:10',
                'contact' => 'required|max:10',
                'description' => 'required'
            ));

        //store data in database
        $men = new Men;

        $men->title = $request->title;
        $men->name = $request->name;
        $men->nic = $request->nic;
        $men->contact = $request->contact;
        $men->description = $request->description;
        $men->user_id = Auth::id();

        $men->save();

        Session::flash('success', 'The Men was successfully created!');

        //redirect to another page
        return redirect()->route('men.show', $men->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $men = Men::find($id);
        if(Auth::id() == $men->user_id){
            return view('mens.show')->withMen($men);
        }
        else{
            return redirect()->route('men.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $men = Men::find($id);
        if(Auth::id() == $men->user_id){
            return view('mens.edit')->withMen($men);
        }
        else{
            return redirect()->route('men.index');
        }
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
        $men = Men::find($id);


        $this->validate($request, array(
            'title'=> 'required|max:255',
            'name' => 'required|max:255',
            'nic'=> 'required|max:10',
            'contact' => 'required|max:10',
            'description' => 'required'
        ));

        $men->title = $request->title;
        $men->name = $request->name;
        $men->nic = $request->nic;
        $men->contact = $request->contact;
        $men->description = $request->description;
        $men->user_id = Auth::id();

        $men->save();

        Session::flash('success', 'The Man was successfully updated.');

        return redirect()->route('men.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $men = Men::find($id);
        if(Auth::id() == $men->user_id){

            $men->delete();

            Session::flash('success', 'This Man was successfully deleted.');
        }

        return redirect()->route('men.index');
    }
}
