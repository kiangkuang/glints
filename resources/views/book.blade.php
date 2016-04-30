@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $skill }} books</div>

                <div class="panel-body">
                    @if (count($books) > 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Author</th>
                                        <th>Price</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td class="text-center"><a href="{{ $book->url }}"><img src="{{ $book->image }}"><br><b>{{ $book->title }}</b></a></td>
                                            <td><b>{{ $book->title }}</b><hr>{{ $book->description }}</td>
                                            <td><b>{{ $book->author }}</b><hr>{{ $book->bio }}</td>
                                            <td><b>${{ $book->price }}</b></td>
                                            <td width="80px"><b>{{ $book->rating }}</b> /5 <i class="glyphicon glyphicon-star-empty"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        No books found!
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
