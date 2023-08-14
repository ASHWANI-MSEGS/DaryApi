<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

use App\Http\Resources\AuthorsResource; // all the api is gonna be passed to the resource>>

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AuthorsResource::collection(Author::all());// this will first insert the fetched api into the resource api then show
        //  return Author::all();// this will directly show the data as it is
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // what is kept------ StoreAuthorRequest $request
    public function store(StoreAuthorRequest $request)
    {
       // return new StoreAuthorRequest($request);
       return "sdljflsdk";
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {

       // return $author->name; // only the name
      // return $author;// this will show the given output as it is

    // return response()->json( [
    //     'data'=>[
    //         'id'=>$author->id,
    //         'type'=>"Authors",
    //         'attributes' =>[
    //             'name'=>$author->name,
    //             'Created_at'=>$author->created_at->format('Y-m-d'), //incase you wanna format 'Y-m-d-h-m-s'
    //             'Updated_at'=>$author->updated_at->format('Y-m-d')
    //             ]
    //     ]
    //    ]);



//   return new AuthorsResource([ "id"=>"123", "created_at"]);
return new AuthorsResource($author);
//   return new AuthorsResource(Author::findOrFail($author)); //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
