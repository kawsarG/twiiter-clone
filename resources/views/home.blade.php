@extends('layouts.app')

@section('content')
<div class="lg:flex">
    <div class="lg:w-32">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10">
        @include('_publish-tweet-panel')

        <div class="border border-b-gray-400 rounded-lg mt-4" style="max-width: 700px;">
                  @include('_tweet')
                  @include('_tweet')
                  @include('_tweet')
                  @include('_tweet')
        </div>
    </div>
    <div class="lg:w-1/6 bg-blue-100 p-4 rounded-lg lg:justify-between">
        @include('_friends-lists')
    </div>
</div>
@endsection
