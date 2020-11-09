@extends('layouts.master')

@section('title' , 'myHome')
@section('content')
@push('css')
    <link rel="stylesheet" href="extra.css">
@endpush
    {{--    @foreach($persons as $person)--}}
    {{--        @if($loop->even)--}}
    {{--            <p style="color: red">{{$person.$loop->even}}--}}
    {{--        @else($loop->odd)--}}
    {{--            <p style="color: green">{{$person}}--}}
    {{--                @endif--}}
    {{--            </p>--}}
    {{--            {{$loop->index}}--}}
    {{--            @endforeach--}}

    {{--            @component('paragraph')--}}
    {{--                @slot('title')--}}
    {{--                    this s a title--}}
    {{--                @endslot--}}
    {{--                @slot('color')--}}
    {{--                    green--}}
    {{--                @endslot--}}
    {{--                this is slot test--}}
    {{--            @endcomponent--}}

    @inject('car' ,'\App\Car')

    {{$car->count()}}
    <hr/>

    @ifTest($car->count())
    "qasem"
    @endifTest

    <hr/>



@endsection



@section('script')
    <script type="'text/javascript" src="indexs.js"></script>
    @parent
    <script type="'text/javascript" src="indexs.js"></script>
@endsection
