@extends('layouts.admin')

@section('content')

<div class="max-w-2xl">

    <h1 class="text-3xl font-bold mb-8">
        Edit Content
    </h1>

    <form
        action="{{ route('contents.update', $content->id) }}"
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
                        {{ $content->category_id == $category->id ? 'selected' : '' }}
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
                value="{{ $content->title }}"
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
            >{{ $content->description }}</textarea>

        </div>

        <button
            class="px-6 py-3 bg-indigo-600 rounded-xl hover:bg-indigo-700"
        >

            Update Content

        </button>

    </form>

</div>

@endsection