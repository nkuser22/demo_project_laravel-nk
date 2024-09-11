<h1>Update Member</h1>

<form action="/edit" method="post">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">

<input type="text" value="{{$data['name']}}" name="name" >
<br><br>
<input type="number" value="{{$data['age']}}" name="age" >
<br><br>
<input type="number" value="{{$data['mobile']}}" name="mobile" ><br><br>
<button type="submit" >Update</button>
</form>
