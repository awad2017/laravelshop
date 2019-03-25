@extends('back.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">الاعلانات</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading text-left">
                    <button type="button" class="btn btn-success">إضافة مستخدم جديد</button>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>العنوان</th>
                            <th>التفاصيل</th>
                            <th>السعر</th>
                            <th>تم البيع</th>
                            <th>المعلن</th>
                            <th>الآقسام</th>
                            <th>الدولة</th>
                            <th>التعديل والحذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->text}}</td>
                                <td>{{$post->price}}</td>
                                <td>{!! Form::checkbox('active', null, $post->is_active) !!}</td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->category->category_name}}</td>
                                <td>{{$post->country->name}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{route('post.edit',$post->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <button class="btn btn-warning">

                                            {!! Form::open(array(
                                             'method' => 'DELETE',
                                              'route' =>  ['post.destroy', $post->id],
                                              'onsubmit' => "return confirm('هل ترغب بحذف السجل ')"
                                            )) !!}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </button>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="well">

                </div>
            </div>
        </div>
    </div>
@endsection
