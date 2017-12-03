@extends('adminlte::layouts.index_template')

@section('htmlheader_title')customers @endsection

@section('contentheader_title')CUSTOMERS @endsection

@section('form_body')



  @component('adminlte::layouts.components.input_fields.name')
    @slot('label_width','3')
    @slot('input_width','5')
    @slot('error'){{$errors->first('name')}}	@endslot
    @slot('value'){{isset($editing_customer) ? $editing_customer->name : old('name')}}@endslot
    @slot('validation','required')
  @endcomponent

  @component('adminlte::layouts.components.input_fields.nic')
    @slot('label_width','3')
    @slot('error'){{$errors->first('nic')}}	@endslot
    @slot('value'){{isset($editing_customer) ? $editing_customer->nic : old('nic')}}@endslot
  @endcomponent

  @component('adminlte::layouts.components.input_fields.tel')
    @slot('label_width','3')
    @slot('error'){{$errors->first('tel')}}	@endslot
    @slot('value'){{isset($editing_customer) ? $editing_customer->tel : old('tel')}}@endslot
    @slot('validation','required')

  @endcomponent


  @component('adminlte::layouts.components.input_fields.address')
    @slot('label_width','3')
    @slot('input_width','8')
    @slot('error'){{$errors->first('address')}}	@endslot
    @slot('value'){{isset($editing_customer) ? $editing_customer->address : old('address')}}@endslot
    @slot('validation','required')

  @endcomponent

  @component('adminlte::layouts.components.input_fields.custom')
    @slot('label_width','3')
    @slot('label','email')
    @slot('input_width','5')
    @slot('id','email')
    @slot('name','email')
    @slot('placeholder','entr email here')
    @slot('validation','required')
    @slot('error'){{$errors->first('email')}}	@endslot
    @slot('value'){{isset($editing_customer) ? $editing_customer->email : old('email')}}@endslot
    @slot('validation','required')

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
    @slot('title','customer data')
    @slot('id','customers_index')
    @slot('table_width','100')
    @slot('columns',[
          'nic'=>10,
          'name'=>20,
          'tel'=>8,
          'address'=>20,
          'email'=>18,
          'status'=>12,
          ''=>12
        ])

    @slot('tbody')
      @foreach ($customers as $customer)
        <tr>
          <td>{{$customer->nic}}</td>
          <td>{{$customer->name}}</td>
          <td>{{$customer->tel}}</td>
          <td>{{$customer->address}}</td>
          <td>{{$customer->email}}</td>
          <td>
            @component('adminlte::layouts.components.ChangeStatus')
              @slot('object',$customer)
            @endcomponent
          </td>
          <td>
            {!!BtnLinkTemplates('edit_no_cap',route('customers.edit', ['id' => $customer->id]),null,null)!!}

            @component('adminlte::layouts.components.RemoveObjectBtn')
              @slot('url',route('customers.destroy', ['id' => $customer->id]))
            @endcomponent
            |
            {!!BtnLinkTemplates('more_info','',null,null)!!} |
            {{-- {!!CreateBtn('price',NULL,'success',NULL,NULL,'usd','add or change price',NULL) !!} --}}

          </td>

        </tr>
      @endforeach


    @endslot


  @endcomponent

@endsection

@section('script')


@append
