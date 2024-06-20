<!DOCTYPE html>
<html lang="en">

<head>
  @include('dashIncludes.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('dashIncludes.header')
  <!-- ======= Sidebar ======= -->
  @include('dashIncludes.sideBar')
 
@yield('content')
      
  <!-- ======= Footer ======= -->
  @include('dashIncludes.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('dashIncludes.footerJs')

</body>

</html>