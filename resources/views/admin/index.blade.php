@extends('layouts.admin')

@section('content')

@if(Session::has('info'))
        <div>
            <p class="info">{{ Session::get('info')}}</p>
        </div>
@endif

    
    <section>

    
    <div class="is-square">
        <h2 class="h2-title">List of our books</h2>
        <div>
        @foreach($books as $book)
            <p>Title: <strong>{{$book->title}}</strong> | Author: {{$book->author->first_name}}, {{$book->author->last_name}} | Genre : {{$book->genre}}<a href="{{ route('admin.edit', $book) }}"> | Edit | </a>
            <a href="{{ route('admin.delete', $book) }}">Delete</a></p>
            @endforeach
        </div>
    </div>
 
    <div>
            <a href="{{ route('admin.create') }}" class='button bg-green font-color-white spacing-4'>Add new book </a>
        </div>


</section>
@endsection