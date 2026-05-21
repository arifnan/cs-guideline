@extends('layouts.app')

@section('content')

<div class="space-y-16">

    @foreach($categories as $category)

        <section id="category-{{ $category->id }}">

            <!-- CATEGORY -->
            <div class="mb-8">

                <h2 class="text-3xl font-bold mb-2">
                    {{ $category->name }}
                </h2>

                <p class="text-white/60">
                    {{ $category->description }}
                </p>

            </div>

            <!-- CONTENTS -->
            <div class="space-y-5">

                @foreach($category->contents as $content)

                    <div
                        x-data="{ open: false }"
                        class="glass-card overflow-hidden"
                    >

                        <!-- HEADER -->
                        <button
                            @click="open = !open"
                            class="w-full px-6 py-5 flex justify-between items-center text-left"
                        >

                            <div>

                                <h3 class="text-lg font-semibold">
                                    {{ $content->title }}
                                </h3>

                            </div>

                            <span x-text="open ? '-' : '+'"
                                  class="text-2xl">
                            </span>

                        </button>

                        <!-- BODY -->
                        <div
                            x-show="open"
                            x-collapse
                            class="px-6 pb-6"
                        >

                            <!-- DESCRIPTION -->
                            <div class="text-white/80 leading-7 whitespace-pre-line">

                                {{ $content->description }}

                            </div>

                            <!-- OPTIONAL ITEMS -->
                            @if($content->items->count())

    <div class="mt-4 space-y-3">

        @foreach($content->items as $item)

            <div class="border-t border-white/10 pt-3">

                <h4 class="font-semibold mb-1">

                    {{ $item->title }}

                </h4>

                <div class="text-white/70 whitespace-pre-line leading-6">

                    {{ $item->content }}

                </div>

            </div>

        @endforeach

    </div>

@endif

                        </div>

                    </div>

                @endforeach

            </div>

        </section>

    @endforeach

</div>

@endsection