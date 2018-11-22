<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
</head>
<body>
    <form action="{{url('/oauth/clients')}}" method="post">
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <input type="text" name="redirect">
        </p>
        <p>
            <input type="submit" value="Store" name="send">
        </p>
        {{csrf_field()}}
    </form>

    <table border="1">
        <tbody>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Redirect</td>
            <td>Secret</td>
        </tr>
            @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->redirect}}</td>
                <td>{{$client->secret}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- {{$clients}} -->
</body>
</html>