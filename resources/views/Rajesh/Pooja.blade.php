
    <h1>Kya baat hai jio ..</h1>
    @foreach ($arStud as $result)
    <p>{{$result}}</p>
    @endforeach
    @include('Rajesh.inner')

    <script>
        var data = @Json($arStud);
        console.log(data);
    </script>
