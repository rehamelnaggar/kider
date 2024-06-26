@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Child To class</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Child To class</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">


       



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Child To class</h5>
             {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>--}}

              <!-- Table with stripped rows -->
              <table class="table datatable">

                <thead>
                  <tr>
                    <th>
                      <b>Child Name</b>
                    </th>
                    <th>
                      <b>Class Name</b>
                    </th>
                </thead>

                <tbody>
                @foreach($rolls as $roll)
            
                  <tr>
                  <td>{{ $roll->child->childName }}</td>
                    <td>{{ $roll->class->className }}</td>
                    
                  </tr>

                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

               
               @endsection