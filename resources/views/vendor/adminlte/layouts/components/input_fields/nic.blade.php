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
  <label class="col-sm-{{$label_width}} control-label">{{$label ?? 'NIC'}}</label>
  <div class="col-sm-{{$input_width ?? '2' }}">
    <input
      id="{{$id ?? ($name ?? 'nic')}}"
      type="text"
      class="form-control"
      name="{{$name ?? 'nic'}}"
      value='{{$value ?? ""}}'
      placeholder="enter NIC here"
      {{$validation}}
      data-parsley-trigger="focusin focusout"
      data-parsley-pattern="^[0-9]{9}$"
    >
    @if (strlen($error))
      <span class="help-block >
        <strong>{{ $error}}</strong>
      </span>
    @endif
  </div>
</div>

{{-- {{isset($employee) ? $employee->name : old('name')}} --}}
