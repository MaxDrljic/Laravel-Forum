@extends('layouts.app')

@section('content')
    @foreach($discussions as $d)
        <div class="card">
            <div class="card-header">
                <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
                <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>
                <a href="{{ route('discussion', ['slug' => $d->slug]) }}" class="btn btn-default float-right">View Post</a>
            </div>

            <div class="card-body">
                <h4 class="text-center">
                    <b>{{ $d->title }}</b>
                </h4>
                <p class="text-center">
                    {{ str_limit($d->content, 100) }}
                </p>
            </div>
            <div class="panel-footer">
                <p>
                    {{ $d->replies->count() }} Replies
                </p>
            </div>
        </div>
    @endforeach

    <div class="text-center">
      {{ $discussions->links() }}
    </div>
@endsection
