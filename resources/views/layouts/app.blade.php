<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('layouts.stylesheet')
  @include('layouts.javascript')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('title')</h1>
            </div>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="@yield('home-href')">@yield('home')</a></li>
                <li class="breadcrumb-item active">@yield('breadcrumb')</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      @yield('content')
    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>
</body>
@yield('extra_javascript')
</html>