@extends('bladeLayout')

@section('content')
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 text-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 ">{{ $author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $date }}</p>
                        </div>
                    </div>
                </address>
                <div class="mb-5">
                    @foreach($tags as $tag)
                        <a href="{{ $tag->url }}" class="bg-brand-softer text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded">{{ $tag->title }}</a>
                    @endforeach
                </div>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">{{ $title }}</h1>
                <img src="{{ $thumbnail }}" alt="" />
                <section class="mt-5">
                    {!! $content !!}
                </section>
            </header>
        </article>

    </div>
</main>

@endsection
