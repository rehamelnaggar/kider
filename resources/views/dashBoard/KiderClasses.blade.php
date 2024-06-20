@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kider Classes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Kider Classes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kider Classes</h5>
             {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>--}}

              <!-- Table with stripped rows -->
              <table class="table datatable">

                <thead>
                  <tr>
                    <th>
                      <b>className</b>
                    </th>
                    <th>price</th>
                    <th>age</th>
                    <th>Time</th>
                    <th>capacity</th>
                    <th>active</th>
                    <th>edit</th>
                    <th>show</th>
                    
                    
                  </tr>
                </thead>

                <tbody>
                @foreach($kiderClasses as $kiderClass)
            
                  <tr>
                  <td>{{ $kiderClass->className }}</td>
                    <td>{{ $kiderClass->price }}</td>
                    <td>{{ $kiderClass->age }}</td>
                    <td>{{ $kiderClass->time }}</td>
                    <td>{{ $kiderClass->capacity }}</td>
                    <td>{{$kiderClass->active ? 'yes':'No'}}</td>
                    <td><a href="{{ route('dashboard.editKiderClass', $kiderClass->id)}}">Edit</a></td>
                    <td><a href="{{ route('dashboard.showKiderClass', $kiderClass->id)}}">show</a></td>
                    
                    
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