<h1>LOGIN PAGE</h1>
<form method="POST" action="/dashboard">
    @csrf
    <input type="text" name="userid" placeholder="UserID" /></br>
    <span style="color:red">@error('userid'){{$message}} @enderror</span></br>
    <input type="text" name="Password" placeholder="Password" /></br>
    <span style="color:red">@error('Password'){{$message}} @enderror</span>
    </br><input type="Submit" value="Login" />

</form>