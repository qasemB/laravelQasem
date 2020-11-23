@extends('layouts.master')

@section('content')
<style>
.main_content{
    background-color: rgba(18, 143, 74, 0.082) !important;
    backdrop-filter: blur(3px);
    border-radius: 10px;
    padding: 10px;
    margin-top: 30px;
    border: 5px solid #128c5f;
    box-shadow: 0px 0px 10px 0px #ffaf00;
}
</style>
    <div class="container">
        <div class="row">
            <div class="main_content col-10 p-4">

                @include('layouts.partials.error')

            <form action="{{route('shop.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <h3 class="text-center">فروشگاه محمد</h3>
                    <div class=" form-group">
                        عنوان کالا:
                        <input class="my-3 form-control" type="text" name="title">
                        توضیحات:
                        <textarea class="my-3 form-control" name="description"></textarea>
                        مبلغ:
                        <input class="my-3 form-control" type="text" name="price">
                        تصویر:
                        <input class="my-3 form-control" type="file" name="image" />

                        <hr>
                        <button  class="btn btn-success m-auto" type="submit"> ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
