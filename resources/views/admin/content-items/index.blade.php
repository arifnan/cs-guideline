@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold">
            Content Items
        </h1>

        <p class="text-muted">
            Manage content details
        </p>

    </div>

    <a href="/admin/content-items/create"
       class="px-5 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition">

        + Add Item

    </a>

</div>

<div class="glass-card overflow-hidden">

    <table class="w-full">

        <thead class="bg-white/5">

            <tr>

                <th class="text-left p-4">
                    Section
                </th>

                <th class="text-left p-4">
                    Title
                </th>

                <th class="text-left p-4">
                    Content
                </th>

                <th class="text-left p-4">
                    Action
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($items as $item)

                <tr class="border-t border-white/5">

                    <td class="p-4">
                        {{ $item->section->title ?? '-' }}
                    </td>

                    <td class="p-4">
                        {{ $item->title }}
                    </td>

                    <td class="p-4 text-muted">
                        {{ Str::limit($item->content, 80) }}
                    </td>

                    <td class="p-4 flex gap-3">

                        <a href="/admin/content-items/{{ $item->id }}/edit"
                           class="px-3 py-1 bg-yellow-500 rounded-lg text-black">

                            Edit

                        </a>

                        <form action="/admin/content-items/{{ $item->id }}"
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