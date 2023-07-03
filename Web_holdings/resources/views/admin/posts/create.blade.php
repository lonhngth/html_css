@extends('admin.layout.master')
@section('content_title', 'Create a new Post')
@section('content')

    <form action="{{ route('admin.post.store') }}" method="post" class="w-[80%] mx-auto" enctype="multipart/form-data">
        @csrf
        <div class="w-full pb-[20px]">
            <label class="text-[20px]">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="border-2 w-full h-[40px] px-[5px]"
                placeholder="Enter title...">

            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full pb-[20px]">
            <label class="text-[20px]">Description</label>
            <input type="text" name="description" value="{{ old('description') }}"
                class="border-2 w-full h-[40px] px-[5px]" placeholder="Enter title...">

            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full pb-[20px]">
            <label class="text-[20px]">Content</label>
            <textarea name="content" id="content" value="{{ old('content') }}"></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('content');
            </script>

            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full pb-[20px]">
            <label class="text-[20px]">Image</label>
            <input type="file"
                class="block w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  file:bg-violet-50 file:text-violet-700
                  hover:file:bg-violet-100
                "
                name="image" />

            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button
            class="pt-[20px] w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
            Create a new post
        </button>
    </form>
@endsection
