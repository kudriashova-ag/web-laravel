<h1>{{$title}}</h1>
<h2>{!! $subtitle !!}</h2>

@foreach($users as $user)
    <p>{{$loop->iteration}}   {{$user}}</p>
@endforeach
