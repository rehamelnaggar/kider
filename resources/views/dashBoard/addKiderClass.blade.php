@extends('layouts.dashMain')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Kider Class</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">{{ $title }}</li>
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
                        <form action="{{ route('dashboard.addKiderClass') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputClassName" class="form-label">Class Name</label>
                                <p style="color: red">
                                    @error('className')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="className" value="{{ old('className') }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputPrice" class="form-label">Price</label>
                                <p style="color: red">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputAge" class="form-label">Age</label>
                                <p style="color: red">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="age" value="{{ old('age') }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputTime" class="form-label">Time</label>
                                <p style="color: red">
                                    @error('time')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="time" value="{{ old('time') }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputCapacity" class="form-label">Capacity</label>
                                <p style="color: red">
                                    @error('capacity')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="capacity" value="{{ old('capacity') }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputImage" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" id="active" name="active" class="form-check-input" {{ old('active') ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>

                            <div class="mb-3">
                                <label for="inputTeacherName" class="form-label">Teacher Name</label>
                                <p style="color: red">
                                    @error('teacherName')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <select name="teacherName" class="form-control">
                                    @foreach(\App\Models\Teacher::all() as $teacher)
                                        <option value="{{ $teacher->id }}" {{ old('teacherName') == $teacher->id ? 'selected' : '' }}>{{ $teacher->fullName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection