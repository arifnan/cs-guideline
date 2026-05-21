@extends('layouts.admin')

@section('content')

<div class="max-w-2xl">

    <h1 class="text-3xl font-bold mb-8">
        Edit Section
    </h1>

    <form
        action="/admin/sections/{{ $section->id }}"
        method="POST"
        class="glass-card p-8 space-y-6"
    >

        @csrf
        @method('PUT')

        <!-- CATEGORY -->
        <div>

            <label class="block mb-2">
                Category
            </label>

            <select
                name="category_id"
                class="search-input"
                required
            >

                @foreach($categories as $category)

                    <option
                        value="{{ $category->id }}"
                        {{ $section->category_id == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>

        </div>

        <!-- TITLE -->
        <div>

            <label class="block mb-2">
                Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ $section->title }}"
                class="search-input"
                required
            >

        </div>

        <!-- DESCRIPTION -->
        <div>

            <label class="block mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="6"
                class="search-input"
                required
            >{{ $section->description }}</textarea>

        </div>

        <button class="px-6 py-3 bg-indigo-600 rounded-xl hover:bg-indigo-700">

            Update Section

        </button>

    </form>

</div>

@endsection