@extends('layouts.master')

@section('content')
<section>

    <div class="card has-border">
        <div class="card-content bg-green ">
            <p class="title font-color-white ">
               Title: {{$book->title}}

            </p>
        </div>
        <div class="card-content">
            <p class="subtitle font-color-black">
                <strong>Author</strong>: {{$book->author->first_name}}, {{$book->author->last_name}}
            </p>
            <p><strong>Genre</strong>: {{$book->genre}}</p>
            <p class="description"><strong>Description</strong>: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam impedit quo numquam maxime, illum vitae inventore distinctio consectetur dolore consequuntur nobis commodi quisquam illo consequatur accusamus iusto reprehenderit? Officia, maxime.</p>
            <div>
                <p>{{count($book->likes)}} Likes | 
                <a href="{{route('users.readmore.like', ['id' =>$book ->id])}}">Like</a>
                </p>
            </div>
        </div>
</section>


<section>
<h2 class="h2-title-18">Books of the same author that might interest you</h2>
</section>
@endsection
