@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @includeIf('threads._list')
            {{ $threads->render() }}
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Trending Threads
                </div>
                <div class="card-body">
                    Nothing for show
                </div>
            </div>
        </div>
    </div>
</div>
@endsection