<x-header componentName="Users"/>
<h1>User Pages </h1>

@include('inner');

@foreach($users as $user)

<p>{{$user}}</p>
@endforeach


@csrf


<script>
    var data = @json($users);
    console.log(data);


</script>