<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
</head>
<body>
        <h1>Chat Application</h1>
        <form method="post" action="{{route('chat')}}">
            @csrf
            <input type="text" name="username" placeholder="Enter Username..." />
            <button type="submit">Send</button>
        </form>

</body>
</html>