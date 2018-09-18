<!DOCTYPE html>
<html>

<head>
    @include('layout/header')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            @include('layout/mainheader')
        </header>

        <aside class="main-sidebar">
            @include('layout/main_sidebar')
        </aside>

        <div class="content-wrapper">
            @include('layout/content_wrapper')
        </div>

        <footer class="main-footer">
            @include('layout/main_footer')
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
            @include('layout/control_sidebar')
        </aside>

    </div>
    
    @include('layout/script')
</body>

</html>