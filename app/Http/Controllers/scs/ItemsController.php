<?php

namespace App\Http\Controllers\scs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items=$this->AllRecords('App\Item');
      $view_data=['items'=>$items];
      $view_data=IndexTemplateMetaData($view_data,'c',"Item",'items');
      return view('scs.items.index',$view_data);
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
      return $this->StoreData('items',$request->all(),"App\Item");
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
      $editing_item='App\Item'::find($id);
      $items=$this->AllRecords('App\Item');
      $view_data=['items'=>$items,'editing_item'=>$editing_item];
      $view_data=IndexTemplateMetaData($view_data,'u',"Item",'items',$id);
      return view('scs.items.index',$view_data);
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
      return $this->UpdateData('items',$request->all(),'App\Item',$id);

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
