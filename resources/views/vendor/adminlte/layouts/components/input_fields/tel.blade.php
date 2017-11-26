{{-- parameters
  name
  error
  label_width
  label
  input_width
  id
  value
 --}}

<div class="form-group{{ strlen($error) ? ' has-error' : '' }}">
  <label class="col-sm-{{$label_width}} control-label">{{$label ?? 'telephone no'}}</label>
  <div class="col-sm-{{$input_width ?? '2' }}">
    <input
      id="{{$id ?? ($name ?? 'tel')}}"
      type="text"
      class="form-control"
      name="{{$name ?? 'tel'}}"
      value='{{$value ?? ""}}'
      placeholder="enter tel"
      {{$validation}}
      data-parsley-trigger="focusin focusout"
      data-parsley-pattern="^[0-9]{10}$"
    >
    @if (strlen($error))
      <span class="help-block >
        <strong>{{ $error}}</strong>
      </span>
    @endif
  </div>
</div>

{{-- {{isset($employee) ? $employee->name : old('name')}} --}}
