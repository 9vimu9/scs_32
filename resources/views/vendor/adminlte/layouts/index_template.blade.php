
{{-- this template create view with store update collapsable box
parameters
	$collapsable_title=>title of collapsable box (create item ,edit item)
	$form_action=>action value(/items,/items/5)
	$submit_btn_title=>submit btn caption(create/update)

--}}

@extends('adminlte::layouts.app')


@section('main-content')
	@component('adminlte::layouts.components.collapsable')
		@slot('title'){{$collapsable_title}} @endslot
		@slot('color')success @endslot
		@slot('body')
			<form method="post" class="form-horizontal validated_form" action="{{$form_action}}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="{{$_method_value}}">

        @yield('form_body')

			 	<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9 m-t-15">
						<button type="submit" class="btn btn-primary" id="btn_submit">{{$submit_btn_title}}</button>
						<button type="reset" class="btn btn-default m-l-5">Cancel</button>
					</div>
			 	</div>

			</form>

		@endslot

	@endcomponent

  @yield('table')







@endsection
