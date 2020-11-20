@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> نمایش پست </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('post.index')}}">بازگشت</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عنوان:
                    <span class="text-success"> {{$post->title}} </span>
                </strong>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسنده:
                    <span class="text-success">{{$post->user->name}}</span>
                </strong>

            </div>
        </div>
    </div>
@endsection
