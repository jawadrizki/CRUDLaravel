@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if(\Illuminate\Support\Facades\Session::has('message'))
                    <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('message')}}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Modify article</div>

                    <div class="panel-body">
                        {!! Form::model($article,array('route'=>['articles.update',$article->id],'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id','Select Category') !!}
                            {!! Form::select('category_id',$categories,$article->category_id,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content','Enter the content') !!}
                            {!! Form::textarea('content',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                    @if ( count( $errors ) > 0 )
                        <ul class="aler alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection