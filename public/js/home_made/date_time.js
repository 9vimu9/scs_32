  //date picker
  $('.datepicker').daterangepicker(
    {
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
           format: 'YYYY/MM/DD'
       }

    }
  )

  //Date range picker
  $('.daterangepicker').daterangepicker()

  //Date range picker with time picker
  $('.daterangepicker_with_time').daterangepicker(
    {
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
           format: 'YYYY/MM/DD h:mm A'
       }

    }
  )

  //Date range as a button
  $('.daterange_predefined').daterangepicker(
    {
      locale: {
         format: 'YYYY/MM/DD'
     },
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },

    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )
