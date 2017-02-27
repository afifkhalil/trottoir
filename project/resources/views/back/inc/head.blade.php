<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('project/resources/assets/images/logo.png')}}" />

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->

    
   <!--Morris Chart CSS -->

        {!! HTML::style('project/resources/assets/myTemplate/assets/plugins/morris/morris.css') !!}
        <!-- Bootstrap core CSS -->
        {!! HTML::style('project/resources/assets/myTemplate/assets/css/bootstrap.min.css') !!}
        <!-- MetisMenu CSS -->
        {!! HTML::style('project/resources/assets/myTemplate/assets/css/metisMenu.min.css') !!}
        <!-- Icons CSS -->
        {!! HTML::style('project/resources/assets/myTemplate/assets/css/icons.css') !!}
        <!-- Custom styles for this template -->
        {!! HTML::style('project/resources/assets/myTemplate/assets/css/style.css') !!}

         <!-- DataTables -->
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('project/resources/assets/myTemplate/assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

        
    

    @yield('css')

    @yield('head')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
    </script>

</head>