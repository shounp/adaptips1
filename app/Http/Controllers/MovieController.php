<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\Movie;
use Illuminate\Http\Request;
=======

use App\Models\Country;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
>>>>>>> 2f454e3 (Meu terceiro commit)

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        $countries = Country::all();
        return view('createmovie',compact('countries'));
>>>>>>> 2f454e3 (Meu terceiro commit)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $data = $request->all();
        $data['image'] = $request->file('image')->store('movies','public');
        $movie = Movie::create($data);
        return redirect(route('movie.index'));
>>>>>>> 2f454e3 (Meu terceiro commit)
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
<<<<<<< HEAD
        //
=======
        $movie = Movie::find($id);
        $countries = Country::all();
        return view('editarmovie',compact('movie','countries'));
>>>>>>> 2f454e3 (Meu terceiro commit)
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
<<<<<<< HEAD
        //
=======
        $data = $request->all();
        $movie = Movie::find($id);
        if($request->hasFile('image')){
            Storage::delete('public/'.$movie->image);
            $data['image']=$request->file('image')->store('movies','public');
        }
        $movie->update($data);
        return redirect(route('movie.index'));
>>>>>>> 2f454e3 (Meu terceiro commit)
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
