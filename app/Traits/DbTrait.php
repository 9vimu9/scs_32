<?php

namespace App\Traits;


trait DbTrait {

    //Get active records only(exclude softrdeleted models)
    // $model="App\model_name"
    public function ActiveRecords($model) {
      return $model::all();
    }

    //get all records
    public function AllRecords($model){
      return $model::withTrashed()->get();
    }

    //get deactiavted records only
    public function InActiveRecords($model){
      return $model::onlyTrashed()->get();
    }

    //store data
    //$route =route to after save the data
    //$request=request came from front end
    //model=App\model_naem
    public function StoreData($route,$request,$model)
    {
      $stored_object = $model::create($request);
      return redirect($route);
    }

    // $editing_id=id of editing objet
    public function UpdateData($route,$request,$model,$editing_id)
    {
      unset($request['_token']);//remove _token and _method indexes from request
      unset($request['_method']);

      $updated_object = $model::where('id',$editing_id)->update($request);
      return redirect($route);
    }
}
 ?>
