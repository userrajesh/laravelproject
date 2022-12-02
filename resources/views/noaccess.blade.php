<h1>You can't access my website</h1>
<table>
    <tr>
        <td colspan="4"> <h3 style="color:red">Getting Data using HTTP method Below</h3></td>
    </tr>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Photo</td>
    </tr>
    @foreach($collection as $user)
    <td>{{$user["id"]}}</td>
    <td>{{$user["first_name"]}}</td>
    <td>{{$user["email"]}}</td>
    <td> <img src="{{$user['avatar']}}" style="border-radius: 50%; height:80px;" /> </td>
    </tr>
    @endforeach
</table>