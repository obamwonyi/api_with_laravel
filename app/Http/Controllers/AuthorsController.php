<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorsRequest;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorsResource;
use App\Models\Author;
use Faker\Factory;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return AuthorsResource::collection(Author::all());
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
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreAuthorRequest $request)
    // {
    //     //to store value in our db
    //     return "test";
    // }

    public function store(AuthorsRequest $request)
    {
        //always rememver to specify the number 
        //items it should create at a time . 
        $faker = Factory::create(1);
        $author = Author::create(
            [
                'name' => $faker->name
            ]
            );

            return new AuthorsResource($author);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
        //returning the data in json format 
        //using the response() method 
        return new AuthorsResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateAuthorRequest $request, Author $author)
    // {
    //     //
    //     $author->update([
    //         'name' => 'Dary'
    //     ]);

    //     return new AuthorsResource($author);
    // }
    public function update(AuthorsRequest $request, Author $author)
    {
        //
        $author->update(
            [
                'name' => $request->input('name')
            ]
        );


            return new AuthorsResource($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        return response(null, 204);
    }
}
