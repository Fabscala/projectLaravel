@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" action="{{route('article.update', [$article->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" value="{{$article->title}}" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control" id="" cols="30" rows="10">{{$article->content}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <form method="POST" class="form-horizontal" action="{{route('article.destroy', [$article->id])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-primary">Supprimer</button>
                                </form>
                            </div>
                        </div>

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection