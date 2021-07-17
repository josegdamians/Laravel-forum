@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header mb-5">
                    <avatar-form :user="{{ $profileUser }}"></avatar-form>
                </div>
                @forelse($activities as $date => $activity)
                    <h3>{{ $date }}</h3>
                    @foreach($activity as $record)
                        @includeIf("profiles.activities.{$record->type}", ['activity' => $record])
                    @endforeach
                @empty
                    <p>There is no activity for this user yet.</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection