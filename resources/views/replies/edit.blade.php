@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">Update a reply</div>

        <div class="card-body">
            <form action="{{ route('reply.update', ['id' => $reply->id]) }}" method="POST">
                {{ csrf_field() }} 

                <div class="form-group">
                    <label for="content">Answer a question</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" value="{{ old('content') }}" required>{{ $reply->content }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success pull-right" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
