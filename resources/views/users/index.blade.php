@extends('layouts.master')


@section('content')
<section>
    @if(Session::has('info'))
    <div>
        <p class="info">{{ Session::get('info')}}</p>
    </div>
    @endif
</section>
<section>
    <div class="columns is-multiline spacing-4">
        @foreach($books as $book)

        <div class="column is-one-quarter">
            <div class="card has-border">
                <div class="card-content bg-green ">
                    <p class="title font-color-white ">
                        {{$book->title}}

                    </p>
                </div>
                <div class="card-content">
                    <p class="subtitle font-color-black">
                  
                    {{$book->author->first_name}} , {{$book->author->last_name}}
                   
                    </p>
                    

                    <p>
                    @foreach($book->genres as $genre)
                        - {{$genre->name}} - 
                    @endforeach
                    </p>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">

                        <a href="#">Add to cart</a>

                    </p>
                    <p class="card-footer-item">
                        <span>
                            <a href="{{route('users.readmore', ['id' => $book->id])}}">Read more...</a>
                        </span>
                    </p>
                </footer>
            </div>
        </div>

        @endforeach
    </div>

</section>



@endsection
