@extends('admin.layout.master')
@section('content_title', 'List media')
@section('content')
    <table class="table-auto w-90% mx-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medias as $key => $media)
                <tr>
                    <td>{{ $key += 1 }}</td>
                    <td>{{ $media->name }}</td>
                    <td>
                        <img width="100" src="../../{{ $media->image }}" alt="">
                    </td>
                    <td>
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ route('admin.media.edit', $media->id) }}">Edit</a>
                        </button>
                        <button class="btn btn-danger">
                            <a class="text-white" onclick="return confirm('Really delete this category?')"
                                href="{{ route('admin.media.delete', $media->id) }}"> Delete</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
