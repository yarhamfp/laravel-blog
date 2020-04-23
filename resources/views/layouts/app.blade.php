<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.startbootstrap.com/sb-ui-kit-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Apr 2020 09:59:28 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>@yield('title')</title>
    {{-- style --}}
    @include('includes.style')
</head>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
              {{-- navbar --}}
                @include('includes.navbar')
                {{-- endnavbar --}}
                
                {{-- content --}}
                @yield('content')
                {{-- end content --}}
            </main>
        </div>
        <div id="layoutDefault_footer">
            @include('includes.footer')
        </div>
    </div>

    {{-- script --}}
    @include('includes.script')
</body>

<!-- Mirrored from themes.startbootstrap.com/sb-ui-kit-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Apr 2020 09:59:36 GMT -->

</html>