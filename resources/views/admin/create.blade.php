@extends('layouts.master')

@section('content')
@include('partials.errors')
<section class="section-is-middle">
    <div class="is-square">

        <form action="{{ route('admin.create')}}" method="post">
            <h2 class="h2-title">Create new entry</h2>
            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Title of the new book</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" type="text" name="title" placeholder="Title of the book">
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Author's first Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" type="text" name="first_name" placeholder="Author's first name">
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-vertical">
                <div class="field-label is-normal">
                    <label class="label">Author's Last Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" type="text" name="last_name" placeholder="Author's last name">
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
                            <input class="input" type="text" name="last_name" placeholder="Author's last name">
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
                                <option name="genres[]" value="{{$genre->id}}">{{$genre->name}}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>
                </div>
            </div>
            {{csrf_field()}}
            <div class="control">
                <button type="submit" class="button bg-green font-color-white spacing-4">Add new book</button>
            </div>
        </form>
    </div>


    <section>

        @endsection
