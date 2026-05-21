@extends('layouts.admin')

@section('content')

<div class="max-w-2xl">

    <h1 class="text-3xl font-bold mb-8">
        Edit Section Item
    </h1>

    <form
        action="/admin/section-items/{{ $item->id }}"
        method="POST"
        class="glass-card p-8 space-y-6"
    >

        @csrf
        @method('PUT')

        <div>

            <label class="block mb-2">
                Section
            </label>

            <select
                name="section_id"
                class="search-input"
                required
            >

                @foreach($sections as $section)

                    <option
                        value="{{ $section->id }}"
                        {{ $item->section_id == $section->id ? 'selected' : '' }}
                    >
                        {{ $section->title }}
                    </option>

                @endforeach

            </select>

        </div>

        <div>

            <label class="block mb-2">
                Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ $item->title }}"
                class="search-input"
                required
            >

        </div>

        <div>

            <label class="block mb-2">
                Content
            </label>

            <textarea
                name="content"
                rows="6"
                class="search-input"
                required
            >{{ $item->content }}</textarea>

        </div>

        <button class="px-6 py-3 bg-indigo-600 rounded-xl hover:bg-indigo-700">

            Update Item

        </button>

    </form>

</div>

@endsection