@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
                <h1>Create a new article</h1>
                <form method="POST" action="/articles">
                    @csrf

                    <div>
                        <label for="title">Add title</label>

                        <div>
                            <input type="text" name="title" value="{{ old('title') }}">

                            @error('title')
                                <p>{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="excerpt">Add excerpt</label>

                        <div>
                            <input type="text" name="excerpt" value="{{ old('excerpt') }}">
                        </div>

                        @error('excerpt')
                            <p>{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="body">Add body</label>

                        <div>
                            <textarea name="body" cols="30" rows="10">{{ old('body') }}</textarea>
                        </div>

                        @error('body')
                            <p>{{ $errors->first('body') }}</p>
                        @enderror
                    </div>

                    <div>
                        <input type="submit">
                    </div>
                </form>
        </div>
    </div>
@endsection
