@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-8">

    <h1 class="text-3xl font-bold">
        Contents
    </h1>

    <a href="/admin/contents/create"
       class="px-5 py-3 rounded-xl bg-indigo-600">

        + Add Content

    </a>

</div>

<div class="glass-card overflow-hidden">

    <table class="w-full">

        <thead class="bg-white/5">

            <tr>

                <th class="p-4 text-left">Title</th>

                <th class="p-4 text-left">Category</th>

                <th class="p-4 text-left">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($contents as $content)

                <tr class="border-t border-white/5">

                    <td class="p-4">
                        {{ $content->title }}
                    </td>

                    <td class="p-4">
                        {{ $content->category->name ?? '-' }}
                    </td>

                    <td class="p-4 flex gap-3">

                        <a href="/admin/contents/{{ $content->id }}/edit"
                           class="px-3 py-1 bg-yellow-500 rounded-lg">

                            Edit

                        </a>

                        <form action="/admin/contents/{{ $content->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="px-3 py-1 bg-red-500 rounded-lg text-white">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection