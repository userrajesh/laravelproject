<h1>This is Dashboard</h1>
<!-- @if (!session()->has('userid')){
    return redirect('login1');
}
@endif -->
@if(session()->has('userid'))
    <h3>Data Saved for user {{session('userid')}}</h3>
@endif

<h2>Welcome ,<span style="color:red;">{{session('userid')}}</span></h2>
<a href="/logout">logout</a>