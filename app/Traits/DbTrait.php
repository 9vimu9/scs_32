<?php

namespace App\Traits;


trait DbTrait {

    public function ActiveRecords($model) {
      return $model::all();
    }

    public function AllRecords($model){
      return $model::withTrashed()->get();
    }

    public function InActiveRecords($model){
      return $model::onlyTrashed()->get();
    }

    public function StoreData($route,$request,$model)
    {
      $stored_object = $model::create($request);
      return redirect($route);
    }

    public function UpdateData($route,$request,$model,$editing_id)
    {
      unset($request['_token']);
      unset($request['_method']);

      $updated_object = $model::where('id',$editing_id)->update($request);
      return redirect($route);
    }
}
 ?>
