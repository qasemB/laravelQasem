@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>تاپ لرن</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('post.create')}}"> پست جدید </a>
            </div>
        </div>
    </div>

    @include('layouts.partials.error')


    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
            <th>تاریخ ایجاد</th>
            <th>عملیات</th>
        </tr>

        @if($message = Session::get('success'))
            <div id="alert" class="alert alert-{{$message[1]}}">
                <p class="text-center">
                    {{$message[0]}}
                </p>
            </div>
        @endif

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <form action="{{route('post.destroy' , $post->id)}}" method="POST">
                    <a class="btn btn-info" href="{{route('post.show',$post->id)}}">نمایش</a>
                    <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}">ویرایش</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    <script>
        setTimeout(function (){
            document.getElementById('alert').style.display='none';
        },3000)
    </script>

    @endsection
