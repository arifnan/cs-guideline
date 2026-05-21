@extends('layouts.admin')

@section('content')

<div class="max-w-2xl">

    <h1 class="text-3xl font-bold mb-8">
        Edit Category
    </h1>

    <form action="/admin/categories/{{ $category->id }}" method="POST"
          class="glass-card p-8 space-y-6">

        @csrf
        @method('PUT')

        <div>
            <label class="block mb-2">Category Name</label>

            <input type="text"
                   name="name"
                   value="{{ $category->name }}"
                   class="search-input"
                   required>
        </div>

        <button class="px-6 py-3 bg-indigo-600 rounded-xl">
            Update
        </button>

    </form>

</div>

@endsection