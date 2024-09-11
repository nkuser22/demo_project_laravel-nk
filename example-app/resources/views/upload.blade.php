<h1>Upload File</h1>

<form action="upload" method="post" enctype="multipart/form-data">
@csrf
<input type="file" value="" name="file" placeholder=''>
<br><br>

<button type="submit" name="" >upload file</button>
</form>
