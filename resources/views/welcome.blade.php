@extends('layout.body')

@section('title', 'Introduction')

@section('content')
    <article class="prose max-w-none mt-4">
        <x-markdown>
            {{ $markdown }}
        </x-markdown> 
    </article>
@endsection
