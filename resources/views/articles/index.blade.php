@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <a href="{{ route('articles.create') }}" style="margin: 5px" class="btn btn-success">Add new Article</a>
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{substr($article->content,0,150)}} ... <br> {{ link_to_route('articles.show',"Show more",[$article->id]) }}</td>
                                    <td width="30%">
                                        {!! Form::open(array('route'=>['articles.destroy',$article->id],'method'=>'DELETE')) !!}
                                        <a href="{{ route('articles.edit',[$article->id]) }}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection