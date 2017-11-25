@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
ff
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<form method="post" class="form-horizontal">

 <div class="form-group">
 <label class="col-sm-3 control-label">Alphabets</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Type something" />
 </div>
 </div>


 <div class="form-group">
 <label class="col-sm-3 control-label">Equal To</label>
 <div class="col-sm-3">
 <input type="password" id="pass2" class="form-control" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup" placeholder="Password" />
        </div>
 <div class="col-sm-3">
 <input type="password" class="form-control" required data-parsley-equalto="#pass2" data-parsley-trigger="keyup" placeholder="Re-Type Password" />
        </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label">E-Mail</label>
 <div class="col-sm-6">
 <input type="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter a valid e-mail" />
        </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label">URL</label>
 <div class="col-sm-6">
 <input type="url" class="form-control" required data-parsley-type="url" placeholder="URL" />
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label">Number</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" required data-parsley-type="number" placeholder="Enter only numbers" />
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label">Alphanumeric</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" required data-parsley-type="alphanum" placeholder="Enter alphanumeric value" />
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label">Select Box</label>
 <div class="col-sm-6">
 <select class="form-control" required>
      <option value="" selected="selected"> - Select - </option>
      <option>First Value</option>
      <option>Second Value</option>
             <option>Third Value</option>
      <option>Fourth Value</option>
 </select>
 </div>
 </div>

 <div class="form-group">
 <label class="col-sm-3 control-label">Textarea</label>
 <div class="col-sm-6">
 <textarea required class="form-control"></textarea>
 </div>
 </div>

 <div class="form-group">
 <div class="col-sm-offset-3 col-sm-9 m-t-15">
 <button type="submit" class="btn btn-primary">Submit</button>
 <button type="reset" class="btn btn-default m-l-5">Cancel</button>
 </div>
 </div>

</form
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
