@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				@component('adminlte::layouts.components.collapsable')
					@slot('color')success		@endslot
					@slot('title')TEST	@endslot
					@slot('body')

						@component('adminlte::layouts.components.datepicker')
							@slot('label_width') 1 @endslot
							@slot('element_width') 5 @endslot

							@slot('label') date range @endslot
							@slot('icon') calendar @endslot
							@slot('picker_type') daterange_predefined @endslot
						@endcomponent
					@endslot
				@endcomponent



			</div>
		</div>
	</div>



@endsection


@section('script')



@endsection
