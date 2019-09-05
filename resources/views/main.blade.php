@extends('layouts.app')

@section('content')
<div class="container">
    <slider></slider>
    <div class="row py-4">
        @foreach ($games as $game)
                <card
                    title="{{$game->name}}"
                    img-path="{{$game->img_path}}"
                    description="{{$game->description}}"
                    sell>
                </card>
        @endforeach
        {{-- <card
            title="Exmsdf"
            img-path="https://images.wallpaperscraft.com/image/call_of_duty_infinite_warfare_infinity_ward_110729_1920x1080.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://www.1zoom.ru/big2/775/320383-blackangel.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://images.wallpaperscraft.com/image/call_of_duty_infinite_warfare_infinity_ward_110729_1920x1080.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://www.1zoom.ru/big2/775/320383-blackangel.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://images.wallpaperscraft.com/image/call_of_duty_infinite_warfare_infinity_ward_110729_1920x1080.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://www.1zoom.ru/big2/775/320383-blackangel.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://images.wallpaperscraft.com/image/call_of_duty_infinite_warfare_infinity_ward_110729_1920x1080.jpg"
            description="sdfsd"
            sell>
        </card>

        <card
            title="Exmsdf"
            img-path="https://www.1zoom.ru/big2/775/320383-blackangel.jpg"
            description="sdfsd"
            sell>
        </card> --}}
    </div>
</div>
@endsection
