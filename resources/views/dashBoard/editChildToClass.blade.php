
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
              <form action="{{ route('dashboard.updateChildToClass', ['id' => $roll->id])}}" method="post">
              @csrf
              @method('put')
              <div class="row mb-3">
                  <label for="child_id" class="col-sm-4 col-form-label">Child</label>
                  <div class="col-sm-8">
                    <select class="form-select" name="child_id" id="child_id" required>
                      @foreach($children as $child)
                        <option value="{{ $child->id }}" {{ $child->id == $roll->child_id ? 'selected' : '' }}>{{ $child->childName }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="class_id" class="col-sm-4 col-form-label">Class</label>
                  <div class="col-sm-8">
                    <select class="form-select" name="class_id" id="class_id" required>
                      @foreach($classes as $class)
                        <option value="{{ $class->id }}" {{ $class->id == $roll->class_id ? 'selected' : '' }}>{{ $class->className }}</option>
                      @endforeach
                    </select>
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
