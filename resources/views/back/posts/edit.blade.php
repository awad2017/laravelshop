@extends('back.layouts.master')
@section('content')
<h2>تعديل بينات</h2>
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('post.update', $post->id) }}" method="post">
                {{ csrf_field() }}
                   <input name="_method" type="hidden" value="PUT"/>
                <div class="form-group">
                    <label for="title_input">العنوان</label>
                    <input type="text" class="form-control" value="{{$post->title}}"/>
                </div>
                <div class="form-group">
                    <label for="details_input">التفاصيل</label>
                    <input type="text" class="form-control" value="{{ $post->text }}"/>
                </div>
                <div class="form-group">
                    <label for="pris_input">السعر</label>
                    <input type="text" class="form-control"  value="{{ $post->price }}"/>
                </div>
                <div class="form-group">
                    <label for="user_input">المعلن </label>
                    <input type="text" value="{{$post->user->name}}">
                </div>
                <div class="form-group">
                    <label for="category_input">الاقسام </label>
                    <input type="text" value="{{$post->category->category_name}}">
                </div>
                <div class="form-group">
                    <label for="country_input">الاقسام </label>
                    <input type="text" value="{{$post->country->name}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">حفظ التعديل</button>
                </div>
            </form>
        </div>
    </div>
@stop