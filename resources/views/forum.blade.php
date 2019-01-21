@extends('layouts.app')

@section('content')
    @foreach($discussions as $d)
        <div class="card">
            <div class="card-header">
                <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
                <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>
                @if($d->hasBestAnswer())
                    <span class="btn float-right btn-success btn-sm">Closed</span>
                @else
                    <span class="btn float-right btn-danger btn-sm">Open</span>    
                @endif
                <a href="{{ route('discussion', ['slug' => $d->slug]) }}" class="btn btn-default btn-sm float-right">View Post</a>
            </div>

            <div class="card-body">
                <h4 class="text-center">
                    <b>{{ $d->title }}</b>
                </h4>
                <p class="text-center">
                    {{ str_limit($d->content, 100) }}
                </p>
            </div>
            <div class="card-footer">
                <span>
                    {{ $d->replies->count() }} Replies
                </span>
                <a href="{{ route('channel', ['slug' => $d->channel->slug]) }}" class="btn btn-default btn-sm float-right">{{ $d->channel->title }}</a>
            </div>
        </div>
    @endforeach

    <div class="text-center">
        {{ $discussions->links() }}
    </div>
@endsection
