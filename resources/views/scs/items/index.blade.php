@extends('adminlte::layouts.index_template')

@section('htmlheader_title')inventory @endsection

@section('contentheader_title')INVENTORY @endsection

@section('form_body')



  @component('adminlte::layouts.components.input_fields.name')
    @slot('label_width','3')
    @slot('input_width','5')
    @slot('error'){{$errors->first('name')}}	@endslot
    @slot('value'){{isset($editing_item) ? $editing_item->name : old('name')}}@endslot
    @slot('validation')
      required
    @endslot
  @endcomponent

  @component('adminlte::layouts.components.input_fields.number')
    @slot('label','initial quantity')
    @slot('name','initial_quantity')
    @slot('label_width','3')
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
    @slot('title','inventory data')
    @slot('id','items_index')
    @slot('table_width','100')
    @slot('columns',[
          '#'=>7,
          'name'=>25,
          'amount'=>12,
          'amount available'=>12,
          'status'=>12,
          ''=>20
        ])

    @slot('tbody')
      @foreach ($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->quantity}}</td>
          <td>{{$item->available_quantity}}</td>
          <td>
            @component('adminlte::layouts.components.ChangeStatus')
              @slot('object',$item)
            @endcomponent
          </td>
          <td>
            {!!BtnLinkTemplates('edit_no_cap',route('items.edit', ['id' => $item->id]),null,null)!!}

            @component('adminlte::layouts.components.RemoveObjectBtn')
              @slot('url',route('items.destroy', ['id' => $item->id]))

            @endcomponent
            |
            {!!BtnLinkTemplates('more_info','items/'.$item->id.'/edit',null,null)!!} |
            {!!CreateBtn('price',NULL,'success',NULL,NULL,'usd','add or change price',NULL) !!}

          </td>

        </tr>
      @endforeach


    @endslot


  @endcomponent

@endsection

@section('script')


@append
