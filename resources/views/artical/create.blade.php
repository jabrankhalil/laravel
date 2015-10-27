@extends('default')

@section('content')

 <h1>Write a new Artical</h1>
 <hr>
 {!!form::open(['url' => 'artical'])!!}
 <div class="form-group">

    {!!form::label('title','Name:')!!}
    {!!form::text('title',null,['class'=>'form-control'])!!}

 </div>
 <!-- form body -->
 <br>
 <div class="form-group">

     {!!form::label('body','body:')!!}
     {!!form::textarea('body',null,['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
    {!! Form::submit('add Artical',['class' => 'btn btn-primary form-control'])!!}

 </div>
 {!!form::close()!!}

 @if($errors->any())
  <ul class='alert alert-danger'>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
   </ul>
 @endif


@stop