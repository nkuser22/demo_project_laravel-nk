<li>User List</h1>


<table border='1'>
    <tr>
    <td>Id<td>
    <td>Name<td>
    <td>mobile<td>
    <td>Age<td>
    <td>Action<td>
    </tr>

@foreach($data as $member) 
<tr>
        <td>{{$member->id}}<td>
        <td>{{$member->name}}<td>
        <td>{{$member->mobile}}<td>
        <td>{{$member->age}}<td>
        <td>
            <a href={{"delete/".$member->id}}>Delete</a>
            <a href={{"edit/".$member->id}}>Edit</a>
        <td>
    </tr>
@endforeach
    
</table>

<div>
    

</div>

