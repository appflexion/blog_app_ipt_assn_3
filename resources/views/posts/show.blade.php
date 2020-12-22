@extends('layouts.base')

@section('body')
    <a href="{{route('posts.index')}}" class="pull-right btn btn-primary">Back</a>
    <br>
    @component('components.post')
        @slot('title') {{ $post->title }} @endslot
        @slot('author') {{ $post->author->name }} @endslot
        @slot('date') {{ $post->created_at->diffForHumans() }} @endslot
        {!! $post->content !!}

    @endcomponent
    <div class="comments">
        @forelse($post->comments as $comment)
            @component('components.comment')
                @slot('author') {{ $comment->author->name }} ({{ $comment->author->email }}) @endslot
                {{ $comment->content }}
            @endcomponent
        @empty
            <h4>No Comments</h4>
        @endforelse
    </div>

@endsection