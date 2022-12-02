<h1>File upload</h1>
<form method="POST" action="fileupload" enctype="multipart/form-data">
    @csrf
    <input type="file" name="filetoupload"><br/>
    <button>Upload file</button>
</form>