@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Child</h1>
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
              <h5 class="card-title">General Add child</h5>

              <!-- General Form Elements -->
              <form action="{{ route('insertChild')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputchildName" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">

                  <p style="color: red">
@error('childName')
{{$message}}
@enderror
</p>
                    <input type="text"name="childName" value="{{old ('childName')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputbirthDate" class="col-sm-2 col-form-label">BirthDate</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('birthDate')
{{$message}}
@enderror
</p>
                    <input type="text" name="birthDate" value="{{old ('birthDate')}}"class="form-control">
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