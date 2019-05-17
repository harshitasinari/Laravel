@extends('layouts.app')

@section('content')

   <h1>Create Posts</h1>
   {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
       <div class="form-group">
           {{Form::label('title','Title')}}
           {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
              @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
       </div>
        <div class="form-group">
           {{Form::label('body','Body')}}
           {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
              @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
       </div>
       {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}
@endsection