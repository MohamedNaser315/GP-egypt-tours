@extends('layouts.main')
@section('content')
    <h1 class="text-center text-success mt-5">Add governorate</h1>
    <div class="container my-5 w-50">
        <form action="{{ route('place.store') }}" method="POST" enctype="multipart/form-data">
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


                <label for="fees_egyptian" class="form-label">fees egyptian</label>
                <input name="fees_egyptian" type="text" class="form-control" id="location" aria-describedby="emailHelp">
                @error('fees_egyptian')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="fees_foreigners" class="form-label">fees foreigners</label>
                <input name="fees_foreigners" type="text" class="form-control" id="location"
                    aria-describedby="emailHelp">
                @error('fees_foreigners')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="start_work" class="form-label">start work</label>
                <input name="start_work" type="time" class="form-control" id="location" aria-describedby="emailHelp">
                @error('start_work')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="end_work" class="form-label">end work</label>
                <input name="end_work" type="time" class="form-control" id="location" aria-describedby="emailHelp">
                @error('end_work')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="lat" class="form-label">lat</label>
                <input name="lat" type="text" class="form-control" id="location" aria-describedby="emailHelp">
                @error('lat')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <label for="ing" class="form-label">lng</label>
                <input name="ing" type="text" class="form-control" id="location" aria-describedby="emailHelp">
                @error('ing')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <select name="governorate_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected> select governorate</option>
                    @foreach ($governorates as $governorate)
                        <option value="{{ $governorate->id }}">{{ $governorate->name }}</option>
                    @endforeach
                </select>

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
