<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Work;
use Session;

class WorksController extends Controller
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
        $works = Work::where('user_id', Auth::id())->get();
        return view('works.index')->withWorks($works);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
                'title'=> 'required|max:255',
                'address' => 'required|max:255',
                'description' => 'required'
            ));

        //store data in database
        $work = new Work;

        $work->title = $request->title;
        $work->address = $request->address;
        $work->description = $request->description;
        $work->user_id = Auth::id();

        $work->save();

        Session::flash('success', 'The job was successfully created!');

        //redirect to another page
        return redirect()->route('work.show', $work->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Work::find($id);
        if(Auth::id() == $work->user_id){
            return view('works.show')->withWork($work);
        }
        else{
            return redirect()->route('work.index');
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
        $work = Work::find($id);
        if(Auth::id() == $work->user_id){
            return view('works.edit')->withPost($work);
        }
        else{
            return redirect()->route('work.index');
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
        $work = Work::find($id);


        $this->validate($request, array(
            'title'=> 'required|max:255',
            'address' => 'required|min:5|max:255',
            'description' => 'required'
        ));

        $work->title = $request->title;
        $work->address = $request->address;
        $work->description = $request->description;
        $work->user_id = Auth::id();

        $work->save();

        Session::flash('success', 'The Job was successfully updated.');

        return redirect()->route('work.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        if(Auth::id() == $work->user_id){

            $work->delete();

            Session::flash('success', 'This job was successfully deleted.');
        }

        return redirect()->route('work.index');
    }
}
