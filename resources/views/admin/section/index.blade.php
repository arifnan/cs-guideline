@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold">
            Sections
        </h1>

        <p class="text-muted">
            Manage layanan (Paspor, Visa, dll)
        </p>

    </div>

    <a href="/admin/sections/create"
       class="px-5 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition">

        + Add Section

    </a>

</div>

<div class="glass-card overflow-hidden">

    <table class="w-full">

        <thead class="bg-white/5">

            <tr>

                <th class="p-4 text-left">
                    Title
                </th>

                <th class="p-4 text-left">
                    Category
                </th>

                <th class="p-4 text-left">
                    Description
                </th>

                <th class="p-4 text-left">
                    Action
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($sections as $section)

                <tr class="border-t border-white/5">

                    <td class="p-4">
                        {{ $section->title }}
                    </td>

                    <td class="p-4 text-muted">
                        {{ $section->category->name ?? '-' }}
                    </td>

                    <td class="p-4 text-muted">
                        {{ \Illuminate\Support\Str::limit($section->description, 80) }}
                    </td>

                    <td class="p-4 flex gap-3">

                        <a href="/admin/sections/{{ $section->id }}/edit"
                           class="px-3 py-1 bg-yellow-500 rounded-lg text-black">

                            Edit

                        </a>

                        <form action="/admin/sections/{{ $section->id }}"
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