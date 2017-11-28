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

  @component('adminlte::layouts.components.table')
    @slot('title')inventory data @endslot
    @slot('id')items_index @endslot
    @slot('table_width')60 @endslot
    @slot('columns',[
          '#'=>10,
          'name'=>30,
          'quantity'=>15,
          'status'=>15,
          ''=>25
        ])


    @slot('tbody')
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

      </tr>

    @endslot


  @endcomponent

@endsection
