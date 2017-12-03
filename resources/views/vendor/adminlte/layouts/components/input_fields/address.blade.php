{{-- parameters
  error
  label_width
  label
  input_width
  id
  name
  type
  Value
  placeholder
  validation
 --}}
<div class="form-group{{ strlen($error) ? ' has-error' : '' }}">
  <label class="col-sm-{{$label_width}} control-label">{{$label ?? 'address'}}</label>
  <div class="col-sm-{{$input_width}}">
    <input
      id="{{$id ?? ($name ?? 'address')}}"
      type="text"
      class="form-control"
      name="{{$name ?? 'address'}}"
      value='{{$value ?? ""}}'
      placeholder="{{$placeholder ?? 'enter address here'}}"
      {{$validation}}
      data-parsley-trigger="focusin focusout"
    >
    @if (strlen($error))
      <span class="help-block >
        <strong>{{ $error}}</strong>
      </span>
    @endif
  </div>
</div>

{{-- {{isset($employee) ? $employee->name : old('name')}} --}}
