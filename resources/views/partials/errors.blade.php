@if(count($errors ->all()))

<div>
    <ul class='redError'>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif