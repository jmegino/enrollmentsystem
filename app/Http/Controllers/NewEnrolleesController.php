<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personalinfos;
use DB;

class NewEnrolleesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['/', 'index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalinfo = personalinfos::orderBy('surname', 'asc')->get();
        return view('pages.showenroll')->with('personalinfo', $personalinfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'middlename' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'course' => 'required',
            'subject' => 'required'
        ]);
            
        $personalinfo = new personalinfos;
        $user = personalinfos::where('email', $personalinfo->email)->exists();
            if ($user === null) {
            // user doesn't exist
            //Submit new enrollee
                $personalinfo->firstname = $request->input('firstname');
                $personalinfo->middlename = $request->input('middlename');
                $personalinfo->surname = $request->input('surname');
                $personalinfo->address = $request->input('address');
                $personalinfo->phone = $request->input('phone');
                $personalinfo->email = $request->input('email');
                $personalinfo->course = $request->input('course');
                $personalinfo->date = $request->input('date');
                $personalinfo->subject= json_encode($request->input('subject'));
                $personalinfo->save();

                return redirect('/')->with('success', 'Enrollment success');
            }else {
                return redirect('/enroll')->with('error','Enrollee already exists');
            }

        
        
        
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
        $personalinfo = personalinfos::find($id);
        return view('pages.edit')->with('personalinfo', $personalinfo);
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
        $this->validate($request, [
            'firstname' => 'required',
            'middlename' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'course' => 'required'
        ]);

        //Submit new enrollee
        $personalinfo = personalinfos::find($id);
        $personalinfo->firstname = $request->input('firstname');
        $personalinfo->middlename = $request->input('middlename');
        $personalinfo->surname = $request->input('surname');
        $personalinfo->address = $request->input('address');
        $personalinfo->phone = $request->input('phone');
        $personalinfo->email = $request->input('email');
        $personalinfo->course = $request->input('course');
        $personalinfo->save();

        return redirect('/showenrollees')->with('success', 'Enrollee updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalinfo = personalinfos::find($id);
        $personalinfo->delete();
        return redirect('/showenrollees')->with('success', 'Enrollee removed');
    }

    public function enroll(){
        return view('pages.newenroll');
    }

}
