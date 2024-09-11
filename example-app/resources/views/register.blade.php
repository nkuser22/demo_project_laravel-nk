
<h4>Register Page with session value</h4>

@if(session('user'))

<h3>Data Save For {{session('user')}}</h3>

@endif
<br><br>
<form action="register" method="post">
@csrf
<input type="text" value="" name="username" placeholder='enter user id'>
<br><br>
<input type="password" value="" name="password" placeholder='password'>
<br><br>
<input type="email" value="" name="email" placeholder='email'><br><br>
<button type="submit" name="" >Add User</button>
</form>
