@extends('adminlte::layouts.app')





@section('main-content')
	@component('adminlte::layouts.components.collapsable')
		@slot('title')@yield('collapsable_title') @endslot
		@slot('color')success @endslot
		@slot('body')
			<form method="post" class="form-horizontal validated_form" action="@yield('form_action')">
        @yield('form_body')

				 <div class="form-group">
					<div class="col-sm-offset-3 col-sm-9 m-t-15">
						<button type="submit" class="btn btn-primary" id="btn_submit">Save</button>
						<button type="reset" class="btn btn-default m-l-5">Cancel</button>
					</div>
				 </div>

			</form>

		@endslot

	@endcomponent

  @yield('table')







@endsection
