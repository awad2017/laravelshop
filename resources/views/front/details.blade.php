@extends('front.layouts.master')
@section('content')

        @php
            $img = $post->images->first()['image'];
            /*$img_name = $img['image'];*/
        @endphp
       <div class="container">
        <h2 class="card-title">{{ $post->tilte }}</h2><hr/>
          <a href=""><img class="card-img-top img-fluid" height="150px" src="{{ asset('storage/img/'.$img) }}" onerror="this.onerror = null; this.src = 'storage/img/default.png'; " alt="image" ></a>
         <div class="card-body">
             <h4>المعلومات الرئيسية</h4>
          <p class="card-title">أسم المعلن {{$post->user->name}}</p>
           <p class="card-title">:البلد {{$post->country->name}}</p>
             <p class="card-title"> : السعر   {{$post->price }}</p>
             <h4>وصف الاعلان</h4>
             <p class="card-title">{{$post->title}}</p>
       </div>
       </div>

@endsection