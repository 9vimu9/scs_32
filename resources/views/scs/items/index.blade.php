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

@section('table')
  table here

@endsection
