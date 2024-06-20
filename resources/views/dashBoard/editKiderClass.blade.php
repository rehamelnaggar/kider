@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>edit Kider Class</h1>
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
              <h5 class="card-title">General Kider Class</h5>

              <!-- General Form Elements -->
              <form action="{{ route('dashboard.updateKiderClass', ['id' => $kiderClass->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
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

                <!-- Display existing image if it exists -->
 @if($kiderClass->image)
        <label for="current_image">Current Image:</label><br>
        <img src="{{ asset('assets/img/' . $kiderClass->image) }}" alt="kiderClass Image" style="max-width: 200px; max-height: 200px;"><br><br>
    @endif

  

                <div class="row mb-3">
                  <label for="inputimage"  class="col-sm-2 col-form-label">image</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" type="file" id="formFile">
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

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">update</button>
                  </div>
                </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->
               
               @endsection