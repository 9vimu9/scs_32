@extends('adminlte::layouts.index_template')

@section('htmlheader_title')inventory @endsection

@section('contentheader_title')INVENTORY @endsection

@section('form_body')



  @component('adminlte::layouts.components.input_fields.name')
    @slot('label_width') 3	@endslot
    @slot('input_width') 5	@endslot
    @slot('error'){{$errors->first('name')}}	@endslot
    @slot('value'){{isset($editing_item) ? $editing_item->name : old('name')}}@endslot
    @slot('validation')
      required
    @endslot
  @endcomponent

  @component('adminlte::layouts.components.input_fields.number')
    @slot('label') initial quantity	@endslot
    @slot('name')initial_quantity @endslot
    @slot('label_width') 3	@endslot
    @slot('error'){{$errors->first('initial_quantity')}}	@endslot
    @slot('value'){{isset($editing_item) ? $editing_item->initial_quantity : old('initial_quantity')}}@endslot
    @slot('validation')
      required
    @endslot
  @endcomponent


@endsection
{{-- id
title=>title of the table
class=>extra classes for table
table_width=>width of the table
columns=>column names associtve array column => column_width
tbody=>body of the table --}}

@section('table')
  {{-- <a class="btn btn-large btn-primary" data-toggle="confirmation" data-title="Open Google?"
   href="https://google.com" target="_blank">Confirmation</a> --}}

  @component('adminlte::layouts.components.table')
    @slot('title','inventory data')
    @slot('id','items_index')
    @slot('table_width','100')
    @slot('columns',[
          '#'=>7,
          'name'=>25,
          'amount'=>15,
          'amount available'=>15,
          'status'=>15,
          ''=>20
        ])


    @slot('tbody')
      @foreach ($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->quantity}}</td>
          <td>{{$item->available_quantity}}</td>
          <td>{{CheckStatus($item)}}</td>
          <td>
            {{BtnTemplates('edit','items/'.$item->id.'/edit')}} |
            {{-- {{BtnTemplates('remove','items/'.$item->id)}} --}}

            @component('adminlte::layouts.components.RemoveObjectBtn')
              @slot('url','items/'.$item->id)
            @endcomponent


          </td>

        </tr>
      @endforeach


    @endslot


  @endcomponent

@endsection

@section('script')
  <script type="text/javascript">
  $('[data-toggle=confirmation]').confirmation({
  rootSelector: '[data-toggle=confirmation]',
   container: 'body'
});

  </script>

@append
