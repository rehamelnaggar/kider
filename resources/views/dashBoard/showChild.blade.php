@extends('./layouts.dashMain')
@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>show Child</h1>
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
          <h5 class="card-title">General show Child</h5>

          <!-- General Form Elements -->
          
            <div class="row mb-3">
              <label for="inputchildName" class="col-sm-2 col-form-label">childName</label>
              <div class="col-sm-10">
                <input type="text" name="childName" value=" {{ $child->childName }}" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputbirthDate" class="col-sm-2 col-form-label">birthDate</label>
              <div class="col-sm-10">
                <input type="text" name="birthDate" value=" {{ $child->birthDate }}"class="form-control">
              </div>
            </div>


            


          

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->      
               @endsection