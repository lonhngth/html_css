@extends('admin.layout.master')
@section('content_title', 'List of Posts')
@section('content')
    <table class="table-auto w-90% mx-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Content</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key => $post)
                <tr>
                    <td>{{ $key += 1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <p style="white-space: nowrap; width: 200px; overflow:hidden">
                            {{ $post->description }}
                        </p>
                    </td>
                    <td>
                        <p style="white-space: nowrap; width: 200px; overflow:hidden">
                            {{ $post->content }}
                        </p>
                    </td>
                    <td>
                        <img width="100" src="../../{{ $post->image }}" alt="">
                    </td>
                    <td>
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ route('admin.post.edit', $post->id) }}">Edit</a>
                        </button>
                        <button class="btn btn-danger">
                            <a class="text-white" onclick="return confirm('Really delete this category?')"
                                href="{{ route('admin.post.delete', $post->id) }}"> Delete</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
