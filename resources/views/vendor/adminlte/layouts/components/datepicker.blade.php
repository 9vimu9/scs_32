<!-- Date -->
<div class="form-group">
  <label class="col-sm-{{$label_width}} control-label">{{$label}}</label>
  <div class="col-sm-{{$element_width}}">
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-{{$icon ?? 'calendar'}}"></i>
      </div>
      <input type="text" class="form-control pull-right {{$picker_type}}" id="{{$id ?? $picker_type }}" name="{{$name ?? $picker_type}}">
    </div>
    <!-- /.input group -->
  </div>

</div>
<!-- /.form group -->

{{--
datepicker
  label='date'
  icon='calendar'
  picker_type='datepicker'

daterangepicker
  label='date range'
  icon='calender'
  picker_type='daterangepicker'

daterangepicker_with_time
  label='date range with time'
  icon='clock-o'
  picker_type='daterangepicker_with_time'


daterange_predefined
  label='date range '
  icon='clock-o'
  picker_type='daterange_predefined'
  --}}
