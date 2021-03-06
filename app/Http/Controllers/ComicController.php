<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::orderBy('id','desc')->get();

        return view('comic.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {



        $data = $request->all();

        $new_comic= new Comic();

        $new_comic->title = $data['title'];
        $new_comic->slug = Str::slug($data['title'],'-');
        $new_comic->image =$data['image'];
        $new_comic->type =$data['type'];
        $new_comic->save();

        return redirect()->route('comics.show',$new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comic.edit', compact('comic'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, $id)
    {


        $comic = Comic::find($id);
        $data = $request->all();
        // $comic->title = $data['title'];
        // $comic->slug = Str::slug($data['title'],'-');
        // $comic->image =$data['image'];
        // $comic->type =$data['type'];
        // $comic->save();

        $comic->slug = Str::slug($data['title'],'-');
        $comic->update($data);
        return redirect()->route('comics.show', $comic);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('prodotto_cancellato', "Il Comic $comic->title ?? stato eliminato correttamente");
    }
}
