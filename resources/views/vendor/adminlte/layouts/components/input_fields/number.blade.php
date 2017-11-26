{{-- parameters
error
label_width
label
input_width
id
name
Value
regex
validation
 --}}

<div class="form-group{{ strlen($error) ? ' has-error' : '' }}">
  <label class="col-sm-{{$label_width}} control-label">{{$label}}</label>
  <div class="col-sm-{{$input_width ?? '2' }}">
    <input
      id="{{$id ?? ($name)}}"
      type="text"
      class="form-control"
      name="{{$name}}"
      value='{{$value ?? ""}}'
      data-parsley-trigger="focusin focusout"
      data-parsley-pattern="{{$regex ?? ''}}"
      data-parsley-type="number"
      {{$validation ?? ''}}
    >
    @if (strlen($error))
      <span class="help-block >
        <strong>{{ $error}}</strong>
      </span>
    @endif
  </div>
</div>

{{-- {{isset($employee) ? $employee->name : old('name')}} --}}
