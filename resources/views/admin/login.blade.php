@extends('layouts.admin')

@section('content')

@if(Session::has('info'))
<div>
    <p class="info">{{ Session::get('info')}}</p>
</div>
@endif


<section>

    <div class="columns">
    <div class="column is-half">
        
    <div class="is-square">
        <h2 class="h2-title">Admin</h2>
        <div>
            <form method="get">
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
                    <p>Only administrator with credentials can access the admin</p>
                </div>
                <div class="control">
                    <button type="submit" class="button bg-green font-color-white spacing-4">Log in as Admin</button>
                </div>
            </form>
            <a href="{{route('admin.index')}}"    
                >log in as Admin here (the authentification isn't ready yet)</a> 
        </div>

    </div>
    </div>
    <div class="column is-half">
    <div class="is-square">
        <h2 class="h2-title">User</h2>
        <div>
            <form method="get">
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
                    <p>Not registered yet? Subscribe <a href="{{route('admin.signup')}}">
                    <strong>here</strong>
                    </a>
                    </p>
                </div>
                <div class="control">
                <button type="submit" class="button bg-green font-color-white spacing-4">Log in as User</button>
   
            </div>
            </form>
            <a href="{{route('users.index')}}"    
                >log in as Admin here (the authentification isn't ready yet)</a> 
        </div>

    </div>
    </div>
    </div>

</section>
@endsection
