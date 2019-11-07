@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <p>
                <a href="/articles/create"><h1>Create a new article</h1></a>
            </p>

            @forelse($articles as $article)
                <div id="content">
                    <div class="title">
                        <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                        <span class="byline">Mauris vulputate dolor sit amet nibh</span>
                    </div>

                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

                    <p>{{ $article->excerpt }}</p>
                </div>

                @empty
                    <p>Nothing here yet</p>
            @endforelse
        </div>
    </div>
@endsection