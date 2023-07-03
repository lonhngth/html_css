@extends('admin.layout.master')
@section('content_title', 'List partner')
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
            @foreach ($partners as $key => $partner)
                <tr>
                    <td>{{ $key += 1 }}</td>
                    <td>{{ $partner->name }}</td>
                    <td>
                        <img width="100" src="../../{{ $partner->image }}" alt="">
                    </td>
                    <td>
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ route('admin.partner.edit', $partner->id) }}">Edit</a>
                        </button>
                        <button class="btn btn-danger">
                            <a class="text-white" onclick="return confirm('Really delete this category?')"
                                href="{{ route('admin.partner.delete', $partner->id) }}"> Delete</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
