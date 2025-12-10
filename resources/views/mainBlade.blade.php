@extends('bladeLayout')

@section('content')
    <h1 class="text-2xl font-semibold text-teal-300">{{ $title }}</h1>
    <section class="mt-2 p-4">
        {!! $content !!}
    </section>
@endsection
