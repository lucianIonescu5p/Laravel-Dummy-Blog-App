@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{ $article->title }}</h2>
                </div>

                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p>{{ $article->body }}</p>

                <p>
                    @forelse($article->tags as $tag)
                        <a href="/articles?tag={{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    @empty
                        <p>No tags yet bruh!</p>
                    @endforelse
                </p>

                <a href="/articles/{{ $article->id }}/edit">Edit</a>
            </div>
        </div>
    </div>
@endsection
