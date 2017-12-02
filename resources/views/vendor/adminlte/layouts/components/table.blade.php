{{--
parameters
  id
  title=>title of the table
  class=>extra classes for table
  table_width=>width of the table
  columns=>column names associtve array column => column_width
  tbody=>body of the table
--}}
@component('adminlte::layouts.components.box')
  @slot('color')default @endslot
    @slot('title'){{$title}} @endslot
      @slot('body')
        <table
          id="{{$id}}"
          class="table table-center table-striped table-hover {{$class ?? "" }}"
          cellspacing="0"
          style="table-layout: fixed; width: {{$table_width}}%"
        >
          <thead>
            <tr>
              @foreach ($columns as $column => $column_width)
                <th style="width: {{$column_width}}%" >{{$column}}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            {{$tbody ?? 'no data available'}}
          </tbody>
        </table>
      @endslot

@endcomponent



@section('script')
  <script>
  jQuery(document).ready(function( $ ) {
    $('#{{$id}}').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
  </script>
@append
