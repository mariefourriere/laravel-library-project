@extends('layouts.admin')

@section('content')

@if(Session::has('info'))
<div>
    <p class="info">{{ Session::get('info')}}</p>
</div>
@endif

<div class="columns">
    <div class="column is-half section-is-center">

        <p>
            <strong>Welcome</strong> to our libray! Please enter your information to subscribe. And have a good read!.
        </p>

    </div>

    <div class="column is-half">



        <div class="is-square">


            <h2 class="h2-title">Sign Up</h2>
            <div>
                <form method="get">

                    <div class="field is-vertical">
                        <div class="field-label is-normal">
                            <label class="label">First Name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="text" name="firstname" placeholder="please enter your firstname">
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="field is-vertical">
                        <div class="field-label is-normal">
                            <label class="label">LastName</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="text" name="lastname" placeholder="please enter your lastname">
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="field is-vertical">
                        <div class="field-label is-normal">
                            <label class="label">Email</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="email" name="email" placeholder="please enter your email">
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="field is-vertical">
                        <div class="field-label is-normal">
                            <label class="label">Password</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="password" name="password" placeholder="please enter your password">
                                </p>
                            </div>
                        </div>

                    </div>

                    <div>
                        <p>Already a user ? Click <a href="{{route('admin.login')}}">
                                <strong>here</strong>
                            </a></p>
                    </div>
                    <div class="control">
                        <a href="{{route('admin.index')}}"><button type="submit" class="button bg-green font-color-white spacing-4">Log in as Admin</button>
</a>
                    </div>
                </form>
            </div>
        </div>


    </div>

    @endsection
