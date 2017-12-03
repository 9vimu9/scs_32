<form action="" class="" method="POST">
  {{ csrf_field() }}
  <input type="hidden" name="object" value="{{$object}}">
   {{-- BtnTemplates($id,$btn_type,$size,$class) --}}
   @if ($object->trashed())
    {!!'<p>DEACTIVE <span class="pull-right">'.BtnTemplates('act','submit',NULL,NULL).'</span></p>'!!}
   @else
    {!!'<p>ACTIVE <span class="pull-right">'.BtnTemplates('deact','submit',NULL,NULL).'</span></p>'!!}
   @endif


</form>
