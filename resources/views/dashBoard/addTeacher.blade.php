@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Teacher</h1>
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
              <form action="{{ route('insertteacher')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputfullName" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">

                  <p style="color: red">
@error('fullName')
{{$message}}
@enderror
</p>
                    <input type="text"name="fullName" value="{{old ('fullName')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('phone')
{{$message}}
@enderror
</p>
                    <input type="text" name="phone" value="{{old ('phone')}}"class="form-control">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputdesignation" class="col-sm-2 col-form-label">designation</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('designation')
{{$message}}
@enderror
</p>
                    <input type="text" name="designation" value="{{old ('designation')}}"class="form-control">
                  </div>
                </div>




                <div class="row mb-3">
                  <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('facebook')
{{$message}}
@enderror
</p>
                    <input type="text" name="facebook" value="{{old ('facebook')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputTwitter" class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('twitter')
{{$message}}
@enderror
</p>
                    <input type="text" name="twitter" value="{{old ('twitter')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputInstagram" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('instagram')
{{$message}}
@enderror
</p>
                    <input type="text" name="instagram" value="{{old ('instagram')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">image</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" value="{{old ('image')}}" type="file" id="formFile">
                    
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
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