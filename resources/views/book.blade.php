@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $skill }} Books</div>

                <div class="panel-body">
                    @if (count($books) > 0)
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
                                        <td class="text-center"><a href="{{ $book->url }}">{{ $book->title }}</a><img src="{{ $book->image }}"></td>
                                        <td>{{ $book->description }}</td>
                                        <td>{{ $book->author }}<hr>{{ $book->bio }}</td>
                                        <td>${{ $book->price }}</td>
                                        <td width="80px">{{ $book->rating }} out of 5 stars</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        No books scraped!
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
