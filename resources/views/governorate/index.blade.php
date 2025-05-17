@extends('layouts.main')
@section('content')
    <h1 class="text-center text-danger">Student</h1>
    {{-- {{ dd($students->image) }} --}}
    <div class="my-5  w-75 mx-auto">
        <table class="table">
            <thead class="table-dark">
                <th>id </th>
                <th>name</th>
                <th>description</th>
                <th> location</th>
                <th> date</th>
                <th>image</th>
                <th>action</th>

            </thead>
            <tbody>
                @foreach ($governorates as $governorate)
                    <tr>
                        <td>{{ $governorate->id }}</td>
                        <td>{{ $governorate->name }}</td>
                        <td>{{ $governorate->description }}</td>
                        <td> <a href="{{ $governorate->location }}">location</a></td>
                        {{-- <td>{{ $governorate->classroom->name }}</td> --}}
                        <td>{{ $governorate->created_at }}</td>
                        <td><img width="50px" height="50px" src="{{ $governorate->image }}" alt=""></td>
                        <td>
                            <a href="" class="btn btn-info"><i class="fa fa-trash">Edit
                                </i></a>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-warning"><i class="fa fa-edit"> Delete</i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
