@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @include('inc/messages')

                        <button data-toggle="modal" data-target="#addModal" type="button" class="btn btn-primary btn-lg"
                                name="button">Add Bookmark
                        </button>
                        <hr>

                        <h3>My Bookmarks</h3>
                        <ul class="list-group">

                            @foreach($bookmarks as $bookmark)

                                <li class="list-group-item clearfix">

                                    <a href="{{$bookmark->url}}" target="_blank"
                                         >{{$bookmark->name}} </a>

<span>{{$bookmark->description}}</span>
                                    <span class="button-group pull-right">

                                     <button class="btn btn-danger" type="button" name="button"><span class="glyphicon glyphicon-remove"></span>Delete</button>

                                   </span>

                                </li>



                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Bookmark</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('bookmarks.store') }}" method="post">

                        {{csrf_field()}}

                        <div class="form-group">


                            <label for="name"> Bookmark Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">


                            <label for="url"> Bookmark Url</label>
                            <input type="text" name="url" class="form-control">
                        </div>

                        <div class="form-group">


                            <label for="description"> Bookmark Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="btn btn-success">

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
