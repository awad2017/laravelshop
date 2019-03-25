@extends('front.layouts.master')
@section('content')
    <a href="index">الرجوع الى صفحة الاعلنات</a>
 {!! Form::open(array('files'=>true),['method' => 'post']) !!}
 <div class="form-group">
     <label>عنوان الإعلان</label>
     {{ Form::text('title', null, ['class' => 'form-control']) }}
 </div>
 <div class="form-group">
     <label>تفصيل الإعلان</label>
     {{ Form::text('text', null, ['class' => 'form-control']) }}
 </div>
 <div class="form-group">
     <label>السعر</label>
  {{ Form::text('price', 'Price', ['class' => 'form-control']) }}
 </div>
 <div class="form-group">
     <label>التصنيف</label>
   {{ Form::select('category_id', $categories,1 , ['class' => 'form-control']) }}
 </div>
 <div class="form-group">
     <label>البلد</label>
     {{ Form::select('country_id', $countries,1, ['class' => 'form-control']) }}
 </div>
 <div class="form-group">
     <label>الصورة</label>
     <input type="file" class="form-control" name="images[]" multiple />
 </div>
 <button type="submit" class="btn btn-primary">حفظ</button>
 {!! Form::close() !!}
@stop