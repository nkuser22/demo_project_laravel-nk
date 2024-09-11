
<li>Add member </h1>




<form action="addmember" method="post">
@csrf
<input type="text" value="" name="name" placeholder='Name'>
<br><br>
<input type="number" value="" name="age" placeholder='Ege'>
<br><br>
<input type="number" value="" name="mobile" placeholder='Mobile'><br><br>
<button type="submit" >Add Member</button>
</form>
