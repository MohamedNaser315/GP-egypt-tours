@extends('layouts.main')
@section('content')
    <h1 class="text-center text-success mt-5">Add governorate</h1>
    <div class="container my-5 w-50">
        <form action="{{ route('governorate.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('name')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="description" class="form-label">description</label>
                <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp">
                @error('description')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="location" class="form-label">location</label>
                <input name="location" type="text" class="form-control" id="location" aria-describedby="emailHelp">
                @error('location')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror



                <label for="image" class="form-label">image</label>
                <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">
                @error('image')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror


                {{-- <br>
                <label for="exampleInputEmail1" class="form-label">description</label>
                <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </textarea>
                <br>
                <label for="exampleInputEmail1" class="form-label">fk</label>
                <input name="category_id" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp"> --}}


            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
