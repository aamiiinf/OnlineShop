 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <title>{{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Seo -->
  <meta name="description" content="News">
  <link rel="canonical" href="http://example.com/" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @if(app()->getLocale()=='fa')
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/custom-style.css') }}">
  @endif

  @stack('third_party_stylesheets')

  @stack('page_css')

  <!-- fullCalendar 5.10 -->
  <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/back-style.css') }}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light border-bottom"
  @if($setting->color == 2)
  style="background: #2F4F4F;"
  @endif>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"
          @if($setting->color == 2)
          style="color:white;"
          @endif
          ><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block mt-1">
        <!-- SEARCH FORM -->
        <form action="{{route('admin_search')}}" class="form-inline ml-3" method="GET">
         @csrf
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" name = "search" placeholder="{{__('search')}}" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </li>
      <li class="nav-item d-none d-sm-inline-block mt-1 @if(app()->getLocale()=='en') mx-2 @endif">
        <select class="form-control form-control-sm form-control-navbar" id ='lang-selector' onchange="location=this.value">
          <option value="{{ route('en') }}" {{ app()->getLocale()=='en'? 'selected' :'' }}>EN</option>
          <option value="{{ route('fa') }}" {{ app()->getLocale()=='fa'? 'selected' :'' }}>FA</option>
        </select>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav
           @if(app()->getLocale()=='fa') mr-auto @endif
           @if(app()->getLocale()=='en') ml-auto @endif">


      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a> -->
        <select class="form-control form-control-sm form-control-navbar" onchange="location=this.value">
          <option value="{{ route('sun') }}" @if($setting->color == 1) selected @endif>
            {{__('sun')}}
          </option>
          <option value="{{ route('moon') }}" @if($setting->color == 2) selected @endif>
            {{__('moon')}}
          </option>
        </select>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"
    @if($setting->color == 2)
    style="background: #696969;color:white;"
    @endif
    >
        <section class="content">
            @yield('content')
        </section>
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer"
  @if($setting->color == 2)
  style="background: #2F4F4F;color:white;"
  @endif>
    <strong>CopyLeft &copy; 2021</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

@if(app()->getLocale()=='fa')
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
@endif

<script>
  $(function () {
      bsCustomFileInput.init();
  });

  $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
  });
</script>

<!-- Chosen -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<script>
    $(".chosen-select").chosen()
</script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@if(app()->getLocale()=='fa')
<script>

    CKEDITOR.replace('editor1', {
       language: 'fa',
       filebrowserImageBrowseUrl: '{{asset('/laravel-filemanager?type=Images')}}',
      filebrowserImageUploadUrl: '{{asset('/laravel-filemanager/upload?type=Images&_token=')}}',
        filebrowserBrowseUrl: '{{asset('/laravel-filemanager?type=Files')}}',
        filebrowserUploadUrl: '{{asset('/laravel-filemanager/upload?type=Files&_token=')}}'
    });

</script>
@endif
@if(app()->getLocale()=='en')
<script>
    // CKEDITOR.replace( 'editor1' );

    CKEDITOR.replace('editor1', {
       language: 'en',
       filebrowserImageBrowseUrl: '{{asset('/laravel-filemanager?type=Images')}}',
      filebrowserImageUploadUrl: '{{asset('/laravel-filemanager/upload?type=Images&_token=')}}',
        filebrowserBrowseUrl: '{{asset('/laravel-filemanager?type=Files')}}',
        filebrowserUploadUrl: '{{asset('/laravel-filemanager/upload?type=Files&_token=')}}'
    });

</script>
@endif
@stack('third_party_scripts')

@stack('page_scripts')

<!-- fullCalendar 5.10 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
<script src="{{ asset('plugins/fullcalendar/locales/fa.js') }}"></script>

<script>
  $(function () {

    var initialLocaleCode;
    @if(app()->getLocale() == 'en')
    initialLocaleCode = 'en';
    @else
    initialLocaleCode = 'fa';
    @endif

    //draggable an external event to the calendar
    var containerEl = document.getElementById('external-events');
    if (containerEl !== null) {
      new FullCalendar.Draggable(containerEl, {
        itemSelector: '.external-event',
      });
    }

    /* initialize the calendar
     -----------------------------------------------------------------*/
     var calendarM = document.getElementById('calendarM');
     var calendar = document.getElementById('calendar');
     var url;
     var calendarEl;
     if(calendarM == null){
       url = 'calendar/fetch';
       calendarEl = calendar;
     }
     else{
       url = 'admin/calendar/fetch';
       calendarEl = calendarM;
     }

        calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          height:500,
          eventSources: [
            {
              url:url,
              method :'GET',
              format:'json',
              'Content-Type': 'multipart/form-data'
            }
          ],
          headerToolbar: {
            // left: 'nextYear,next,prev,prevYear today',
            left       : 'prevYear,prev,next,nextYear today',
            center     : 'title',
            right      : 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },
          navLinks     : true, // can click day/week names to navigate views
          businessHours: true,
          dayMaxEvents : true, // allow "more" link when too many events
          locale       : initialLocaleCode,
          selectable   : true,
          selectMirror : true,
          editable     : true,
          droppable    : true,
          select       : function(arg)
          {
            var title = prompt('{{__('event_title')}} :');
            if(title){
              // var start = moment(arg.start).format('YYYY-MM-DD HH:mm:ss');
              // var end = moment(arg.end).format('YYYY-MM-DD HH:mm:ss');
              var start = arg.startStr;
              var end = arg.endStr;
              $.ajax({
                url : "{{url('admin/calendar/action')}}",
                type: "POST",
                data:{
                  title:title,
                  start:start,
                  end:end,
                  type:'add',
                  "_token":"{{csrf_token()}}"
                },
                success: function(data)
                {
                  // alert("رویداد با موفقیت ایجاد شد.");
                  calendar.addEvent({
                    title: title,
                    start: start,
                    end: end,
                    id: data.id,
                    allDay: arg.allDay,
                  })
                  calendar.unselect()
                },
                error: function()
                {
                  alert("{{__('problem_creating_event')}}");
                },
              })
            }
          },
          eventResize  : function(arg)
          {
            var start = moment(arg.event.start).format('YYYY-MM-DD HH:mm:ss');
            var end = moment(arg.event.end).format('YYYY-MM-DD HH:mm:ss');
            var title = arg.event.title;
            var id = arg.event.id;
            $.ajax({
              url:"{{url('admin/calendar/action')}}",
              type:"POST",
              data:{
                title:title,
                start:start,
                end:end,
                id:id,
                type:'update',
                "_token":"{{csrf_token()}}"
              },
              success:function(response){
                alert('{{__('event_updated')}}');
              },
              error:function(){
                alert('{{__('update_error')}}');
              }
            })
          },
          eventDrop    : function(arg)
          {
            var start = moment(arg.event.start).format('YYYY-MM-DD HH:mm:ss');
            var end = moment(arg.event.end).format('YYYY-MM-DD HH:mm:ss');
            var title = arg.event.title;
            var id = arg.event.id;
            $.ajax({
              url:"{{url('admin/calendar/action')}}",
              type:"POST",
              data:{
                title:title,
                start:start,
                end:end,
                id:id,
                type:'update',
                "_token":"{{csrf_token()}}"
              },
              success:function(response){
                alert('{{__('event_updated')}}');
              },
              error:function(){
                alert('{{__('update_error')}}');
              }
            })
          },
          eventClick   : function(arg)
          {
            if(confirm('{{__('delete_the_event')}}')){
              var id = arg.event.id;
              $.ajax({
                url:"{{url('admin/calendar/action')}}",
                type:"POST",
                data:{
                  id:id,
                  type:'delete',
                  "_token":"{{csrf_token()}}"
                },
                success: function(response){
                  arg.event.remove()
                  // alert('رویداد با موفقیت حذف شد');
                },
                error: function(){
                  alert('{{__('err_deleting_event')}}');
                }
              })
            }
          },
          drop         : function(arg)
          {
            var start = moment(arg.date).format('YYYY-MM-DD HH:mm:ss');
            var end = moment(arg.date).format('YYYY-MM-DD HH:mm:ss');
            var title = arg.draggedEl.innerText.trim();
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              arg.draggedEl.parentNode.removeChild(arg.draggedEl);
              var id = arg.draggedEl.id;

              $.ajax({
                type : "POST",
                dataType : "json",
                url : "{{url('admin/calendar/action')}}",
                data :{
                  id : id,
                  type : "deletexternalevn",
                  "_token" : "{{csrf_token()}}"
                },
                success: function(data){
                  // alert('رویداد خارجی حذف شد');
                },
                error: function(){
                  alert('{{__('problem_event')}}');
                },
              })
            }
            $.ajax({
              type : "POST",
              dataType : "json",
              url : "{{url('admin/calendar/action')}}",
              data : {
                title : title,
                start: start,
                end : end,
                type : 'add',
                "_token":"{{csrf_token()}}"
              },
              success: function(data){
                // alert('رویداد ایجاد شد');
                calendar.addEvent({
                    title: title,
                    start: start,
                    end: end,
                    id: data.id,
                    allDay: arg.allDay
                })
              },
              error : function(){
                alert('{{__('err_creating_event')}}');
              }
            })
          }
        });
        calendar.render();

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }
      //Create events
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "{{url('admin/calendar/action')}}",
        data: {
          title : val,
          color : currColor,
          type : 'addexternalevn',
          "_token" : "{{csrf_token()}}"
        },
        success:function(data){
          // alert('رویداد اضافه شد');
        },
        error:function(){
          alert('{{__('error_creating_event')}}');
        },
      })
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)
      //Remove event from text input
      $('#new-event').val('')
    })
  })

  /* Start chart */
  function requestData(days, chart , url){
    $.ajax({
      type: "GET",
      dataType: "json",
      url: url,
      data: { days: days }
    })
    .done(function( data ) {
      chart.setData(data);
      // chart.setData(JSON.parse(data));
    })
    .fail(function() {
      alert( "{{__('err_receiving_information')}}" );
    });
  }

  var user_chart = new Morris.Bar({
    element: 'user_chart',
    data: [0,0],
    xkey: 'date',
    ykeys: ['users'],
    labels: ['{{__('Number_posts_viewed')}}'],
    parseTime: false,
    hideHover:'auto',
    xLabelAngle:90,
    resize: true,
  });

  var post_chart = new Morris.Bar({
    element: 'post_chart',
    data: [0,0],
    xkey: 'date',
    ykeys: ['posts'],
    labels: ['{{__('Number_registered_users')}}'],
    parseTime: false,
    hideHover:'auto',
    xLabelAngle:90,
    resize: true,
  });

  const user_url = "{{url('/admin/chart/user')}}";
  const post_url = "{{url('/admin/chart/post')}}";
  let url = user_url;
  let chart = user_chart;

  requestData(30, chart , url);

  $('ul.ranges a').click(function(e){
    e.preventDefault();
    var el = $(this);
    days = el.attr('data-range');
    requestData(days, chart , url);
  });

  $('ul li a#post').click(function(e){
    e.preventDefault();
    url = post_url;
    chart = post_chart;
    requestData(30, chart, url);
    $('div#user_chart').removeClass('active');
    $('div#post_chart').addClass('active');
    if(!$('ul.ranges a.month').hasClass('active')){
      $('ul.ranges a').removeClass('active');
      $('ul.ranges a.month').addClass('active');
    }
  });

  $('ul li a#user').click(function(e){
    e.preventDefault();
    url = user_url;
    chart = user_chart;
    requestData(30, chart, url);
    $('div#post_chart').removeClass('active');
    $('div#user_chart').addClass('active');
    if(!$('ul.ranges a.month').hasClass('active')){
      $('ul.ranges a').removeClass('active');
      $('ul.ranges a.month').addClass('active');
    }
  })
  /* End Chart */

</script>

</body>
</html>
