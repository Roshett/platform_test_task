@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <profile-person></profile-person>
            <profile-about class="my-4"></profile-about>
        </div>
        <div class="col-lg-9">
            <profile-stats></profile-stats>
            <profile-chart class="mt-5"></profile-chart>
        </div>
        <div class="col-lg-12">
            <h2 class="mt-3 mb-4">Favorite games</h2>
        </div>
        <card
            title="{{$games[2]->name}}"
            img-path="{{$games[2]->img_path}}"
            description="{{$games[2]->description}}"
            >
        </card>
        <card
            title="{{$games[5]->name}}"
            img-path="{{$games[5]->img_path}}"
            description="{{$games[5]->description}}"
            >
        </card>
        <card
            title="{{$games[6]->name}}"
            img-path="{{$games[6]->img_path}}"
            description="{{$games[6]->description}}"
            >
        </card>
        <card
            title="{{$games[7]->name}}"
            img-path="{{$games[7]->img_path}}"
            description="{{$games[7]->description}}"
            >
        </card>
    </div>
</div>
@endsection
