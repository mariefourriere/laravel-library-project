@extends('layouts.master')

@section('content')
@include('partials.errors')
<section class="section-is-middle">
    <div class="is-square">

        <form action="{{ route('admin.update')}}" method="post">
            <h2 class="h2-title">Edit the entry</h2>
        <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Title of the new book</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" type="text" name="title" value="{{$book->title}}">
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Author's first name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                   
                        <p class="control">
                        
                            <input class="input" type="text" name="first_name" value ="{{$book->author->first_name}}">
                        
                        </p>
                    
                    </div>
                </div>
            </div>

            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Author's last name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    
                        <p class="control">
                       
                            <input class="input" type="text" name="last_name" value ="{{$book->author->last_name}}">
                            
                        </p>
                   
                    </div>
                </div>
            </div>

            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Author's Gender</label>
                </div>
                <div class="field-body">
                    <div class="field">
                   
                        <p class="control">
                       
                            <input class="input" type="text" name="gender" value ="{{$book->author->gender}}">
                            
                        </p>
                     
                    </div>
                </div>
            </div>

            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Genre</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="select">
                    <select class="select">
    <option>Select genres</option>
    @foreach($genres as $genre)
    <option name="genres[]"                          value="{{$genre->id}}" {{$book->genres->contains($genre->id) ? 'checked' : ''}}>{{$genre->name}}</option>
    @endforeach
  </select>
  </div>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$bookId}}">
            <div class="control">
                <button type="submit" class="button bg-green font-color-white spacing-4">Edit book entry</button>
            </div>


     

        </form>
    </div>


    <section>

        @endsection
