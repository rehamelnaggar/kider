@extends('./layouts.dashMain')
@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1> show Email </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> General show Email  </h5>

          
          
          <div class="row mb-3">
            <label for="inputname" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
              <input type="text" name="name" value="{{ $email->name }}" class="form-control" readonly>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputemail" class="col-sm-2 col-form-label">email </label>
            <div class="col-sm-10">
              <input type="text" name="email" value="{{ $email->email }}" class="form-control" readonly>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputsubject" class="col-sm-2 col-form-label">subject</label>
            <div class="col-sm-10">
              <input type="text" name="subject" value="{{ $email->subject }}" class="form-control" readonly>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputmessage" class="col-sm-2 col-form-label">message</label>
            <div class="col-sm-10">
              <textarea name="message" class="form-control" readonly>{{ $email->message }}</textarea>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

</main><!--End #main -->      
@endsection