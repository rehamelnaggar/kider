@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>edit Teacher</h1>
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
              <h5 class="card-title">General Add teacher</h5>

              <!-- General Form Elements -->
              <form action="{{ route('dashboard.updateTeacher', ['id' => $teacher->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
                <div class="row mb-3">
                  <label for="inputfullName"  class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="fullName" value="{{ $teacher->fullName }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPhone"  class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputdesignation"  class="col-sm-2 col-form-label">designation</label>
                  <div class="col-sm-10">
                    <input type="text" name="designation" value="{{ $teacher->designation }}" class="form-control">
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputFacebook"  class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="text" name="facebook" value="{{ $teacher->facebook }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputTwitter"  class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                    <input type="text" name="twitter" value="{{ $teacher->twitter }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputInstagram"  class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" name="instagram" value="{{ $teacher->instagram }}" class="form-control">
                  </div>
                </div>

                <!-- Display existing image if it exists -->
 @if($teacher->image)
        <label for="current_image">Current Image:</label><br>
        <img src="{{ asset('assets/img/' . $teacher->image) }}" alt="teacher Image" style="max-width: 200px; max-height: 200px;"><br><br>
    @endif

  

                <div class="row mb-3">
                  <label for="inputNumber"  class="col-sm-2 col-form-label">image</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" type="file" id="formFile">
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