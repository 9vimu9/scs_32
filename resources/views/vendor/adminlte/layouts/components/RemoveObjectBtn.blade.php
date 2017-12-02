<form action="{{$url}}" class="pull-right" method="POST">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="DELETE">

  <button
    type="submit"
    class="btn btn-danger btn-{{$size ?? 'xs'}}"
    name="delete"
    {{CreateBtnConfirmation('yes','danger','no','info','remove','are you sure')}}
  >
    <i class='fa fa-trash-o' aria-hidden='true'></i>
  </button>
</form>
