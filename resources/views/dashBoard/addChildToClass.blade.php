@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Child to class</h1>
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
              <h5 class="card-title">General Add child to class</h5>

              <!-- General Form Elements -->


              <form action="{{ route('insertChildren_classes') }}" method="POST">
    @csrf 
    <div class="row mb-3">
                                <label for="child_id" class="col-sm-2 col-form-label">Child</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="child_id" id="child_id" required>
                                        @foreach($children as $child)
                                            <option value="{{ $child->id }}">{{ $child->childName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="class_id" class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="class_id" id="class_id" required>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->className }}</option>
                                        @endforeach
                                    </select>
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