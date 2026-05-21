@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold">
            Content Items
        </h1>

        <p class="text-muted">
            Manage detail layanan
        </p>

    </div>

    <a href="{{ route('content-items.create') }}"
       class="px-5 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700">

        + Add Item

    </a>

</div>

<div class="glass-card overflow-hidden">

    <table class="w-full">

        <thead class="bg-white/5">

            <tr>

                <th class="p-4 text-left">
                    Content
                </th>

                <th class="p-4 text-left">
                    Title
                </th>

                <th class="p-4 text-left">
                    Action
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($items as $item)

                <tr class="border-t border-white/5">

                    <!-- CONTENT -->
                    <td class="p-4">

                        {{ $item->content->title ?? '-' }}

                    </td>

                    <!-- ITEM TITLE -->
                    <td class="p-4">

                        {{ $item->title }}

                    </td>

                    <!-- ACTION -->
                    <td class="p-4 flex gap-3">

                        <a href="{{ route('content-items.edit', $item->id) }}"
                           class="px-3 py-1 bg-yellow-500 rounded-lg text-black">

                            Edit

                        </a>

                        <form
                            action="{{ route('content-items.destroy', $item->id) }}"
                            method="POST"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                class="px-3 py-1 bg-red-500 rounded-lg text-white"
                            >

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