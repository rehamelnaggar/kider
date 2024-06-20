@extends('./layouts.dashMain')
@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>show kider class</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General show kider class</h5>

          <!-- General Form Elements -->
          
          <div class="row mb-3">
                  <label for="inputclassName"  class="col-sm-2 col-form-label">className</label>
                  <div class="col-sm-10">
                    <input type="text" name="className" value="{{ $kiderClass->className }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputprice"  class="col-sm-2 col-form-label">price</label>
                  <div class="col-sm-10">
                    <input type="text" name="price" value="{{ $kiderClass->price }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputage"  class="col-sm-2 col-form-label">age</label>
                  <div class="col-sm-10">
                    <input type="text" name="age" value="{{ $kiderClass->age }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputtime"  class="col-sm-2 col-form-label">time</label>
                  <div class="col-sm-10">
                    <input type="text" name="time" value="{{ $kiderClass->time }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputcapacity"  class="col-sm-2 col-form-label">capacity</label>
                  <div class="col-sm-10">
                    <input type="text" name="capacity" value="{{ $kiderClass->capacity }}" class="form-control">
                  </div>
                </div>


            <div class="row mb-3">
                                <label for="active" class="col-sm-2 col-form-label">Active</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" id="active" name="active" class="form-check-input" {{ $kiderClass->active ? 'checked' : '' }}>
                                </div>
                            </div>

                            <div class="row mb-3">
                  <label for="inputteacher_id"  class="col-sm-2 col-form-label">Teacher id</label>
                  <div class="col-sm-10">
                    <input type="text" name="teacher_id" value="{{ $kiderClass->teacher_id }}" class="form-control">
                  </div>
                </div>

            <p><img src=" {{ asset('assets/img/'. $kiderClass->image) }}  " alt=""></p>

            


          

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->      
               @endsection