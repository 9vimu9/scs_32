@extends('adminlte::layouts.app')

@section('htmlheader_title')home @endsection

@section('contentheader_title')ITEMS @endsection



@section('main-content')
	@component('adminlte::layouts.components.collapsable')
		@slot('title')add item @endslot
		@slot('color')success @endslot
		@slot('body')
			<form method="post" class="form-horizontal validated_form" action="">

					@component('adminlte::layouts.components.input_fields.name')
						@slot('label_width') 3	@endslot
						@slot('input_width') 5	@endslot
						@slot('error'){{$errors->first('name')}}	@endslot
						@slot('value'){{isset($item) ? $item->name : old('name')}}@endslot
						@slot('validation')
							required
						@endslot
					@endcomponent

					@component('adminlte::layouts.components.input_fields.number')
						@slot('label') initial quantity	@endslot
						@slot('name')initial_quantity @endslot
						@slot('label_width') 3	@endslot
						@slot('error'){{$errors->first('initial_quantity')}}	@endslot
						@slot('value'){{isset($item) ? $item->initial_quantity : old('initial_quantity')}}@endslot
						@slot('validation')
							required
						@endslot
					@endcomponent


				 <div class="form-group">
					<div class="col-sm-offset-3 col-sm-9 m-t-15">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="reset" class="btn btn-default m-l-5">Cancel</button>
					</div>
				 </div>

			</form>

		@endslot

	@endcomponent







@endsection
