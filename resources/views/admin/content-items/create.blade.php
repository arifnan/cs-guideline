@extends('layouts.admin')

@section('content')

<div class="max-w-2xl">

    <h1 class="text-3xl font-bold mb-8">
        Add Content Item
    </h1>

    <form
        action="{{ route('content-items.store') }}"
        method="POST"
        class="glass-card p-8 space-y-6"
    >

        @csrf

        <!-- CONTENT -->
        <div>

            <label class="block mb-2">
                Content
            </label>

            <select
                name="content_id"
                class="search-input"
                required
            >

                @foreach($contents as $content)

                    <option value="{{ $content->id }}">

                        {{ $content->title }}

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
                name="content"
                rows="6"
                class="search-input"
                required
            ></textarea>

        </div>

        <button
            class="px-6 py-3 bg-indigo-600 rounded-xl hover:bg-indigo-700"
        >

            Save Item

        </button>

    </form>

</div>

@endsection