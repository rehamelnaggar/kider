@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Kider Class</h1>
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
              <h5 class="card-title">General Add Kider Class</h5>

              <!-- General Form Elements -->
              <form action="{{ route('insertKiderClass')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputclassName" class="col-sm-2 col-form-label">class Name</label>
                  <div class="col-sm-10">

                  <p style="color: red">
@error('className')
{{$message}}
@enderror
</p>
                    <input type="text"name="className" value="{{old ('className')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputprice" class="col-sm-2 col-form-label">price</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('price')
{{$message}}
@enderror
</p>
                    <input type="text" name="price" value="{{old ('price')}}"class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputage" class="col-sm-2 col-form-label">age</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('age')
{{$message}}
@enderror
</p>
                    <input type="text" name="age" value="{{old ('age')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputtime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('time')
{{$message}}
@enderror
</p>
                    <input type="text" name="time" value="{{old ('time')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputcapacity" class="col-sm-2 col-form-label">capacity</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('capacity')
{{$message}}
@enderror
</p>
                    <input type="text" name="capacity" value="{{old ('capacity')}}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">image</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" value="{{old ('image')}}" type="file" id="formFile">
                    
                  </div>
                </div>

                <div class="row mb-3">
                                <label for="active" class="col-sm-2 col-form-label">Active</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" id="active" name="active" class="form-check-input" {{ old('active') ? 'checked' : '' }}>
                                </div>
                            </div>
    

                           <div class="row mb-3">
                  <label for="inputteacher_id" class="col-sm-2 col-form-label">teacher id</label>
                  <div class="col-sm-10">
                  <p style="color: red">
@error('teacher_id')
{{$message}}
@enderror
</p>
                    <input type="text" name="teacher_id" value="{{old ('teacher_id')}}" class="form-control">
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