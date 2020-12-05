<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->input('limit');
        $page = $request->input('page');
        $offset = ($page-1)* $limit;

        $collections = Collection::limit($limit)->offset($offset)->get();

        return $collections;
                            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$user)
    {
        $collection = new Collection;

        $collection->user_id = $user;
        $collection->item_cd = $request->item_cd;
        $collection->item_url = $request->item_url; 
        $collection->image_url = $request->image_url;
        $collection->item_name = $request->item_name;
        $collection->item_price = $request->item_price;
        $collection->save();

        return $collection;
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Collection::find($id);
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
    public function destroy($collection)
    {
        $delete_collection = Collection::find($collection);
        $delete_collection->delete();

        return $delete_collection;

        
    }
}
