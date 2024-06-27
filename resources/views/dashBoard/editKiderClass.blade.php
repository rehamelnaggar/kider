@extends('layouts.dashMain')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Kider Class</h1>
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
                        <h5 class="card-title">General Edit Kider Class</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('dashboard.updateKiderClass', ['id' => $kiderClass->id]) }}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('PUT')
                            <div class="mb-3">
                                <label for="inputClassName" class="form-label">Class Name</label>
                                <p style="color: red">
                                    @error('className')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="className" value="{{ old('className', $kiderClass->className) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputPrice" class="form-label">Price</label>
                                <p style="color: red">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="price" value="{{ old('price', $kiderClass->price) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputAge" class="form-label">Age</label>
                                <p style="color: red">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="age" value="{{ old('age', $kiderClass->age) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputTime" class="form-label">Time</label>
                                <p style="color: red">
                                    @error('time')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="time" value="{{ old('time', $kiderClass->time) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputCapacity" class="form-label">Capacity</label>
                                <p style="color: red">
                                    @error('capacity')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <input type="text" name="capacity" value="{{ old('capacity', $kiderClass->capacity) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="inputImage" class="form-label">Current Image</label><br>
                                @if ($kiderClass->image)
                                    <img src="{{ asset('assets/img/' . $kiderClass->image) }}" alt="Class Image" style="max-width: 300px;">
                                    <input type="hidden" name="current_image" value="{{ $kiderClass->image }}">
                                @else
                                    <p>No image available</p>
                                @endif
                                <br><br>
                                <label for="inputNewImage" class="form-label">New Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" id="active" name="active" class="form-check-input" {{ $kiderClass->active ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>

                            <div class="mb-3">
                                <label for="inputTeacherName" class="form-label">Teacher Name</label>
                                <p style="color: red">
                                    @error('teacher_id')
                                        {{ $message }}
                                    @enderror
                                </p>
                                <select name="teacher_id" class="form-control">
                                    @foreach($teachers as $teacher)
                                        <option value="{{ $teacher->id }}" {{ old('teacher_id', $kiderClass->teacher_id) == $teacher->id ? 'selected' : '' }}>{{ $teacher->fullName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection