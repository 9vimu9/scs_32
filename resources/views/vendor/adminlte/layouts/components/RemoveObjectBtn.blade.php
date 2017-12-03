<form action="{{$url}}" class="pull-right" method="POST">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="DELETE">
   {{-- BtnTemplates($id,$btn_type,$size,$class) --}}
  {!!BtnTemplates('remove_no_cap','submit',NULL,NULL)!!}
</form>
