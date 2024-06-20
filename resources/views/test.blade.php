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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->

        @include('dashIncludes.leftSideColumns')
               <!-- Right side columns -->
               @include('dashIncludes.rightSideColumns')

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('dashIncludes.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('dashIncludes.footerJs')

</body>

</html>