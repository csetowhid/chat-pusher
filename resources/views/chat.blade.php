<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>

    <div class="app">
      
        <header>
            <h1>Chat Application</h1>
            <h3>User Name: {{$username}}</h3>
            {{-- <input type="hidden" name="username" id="username" value="{{$username}}" /> --}}
            {{-- <input type="text" name="username" id="username" placeholder="Enter Username..." /> --}}
        </header>
        <div id="messages"></div>
        <form id="message_form">
          <input type="hidden" name="username" id="username" value="{{$username}}" />
            <input type="text" name="message" id="message_input" autocomplete="off" placeholder="Message..." />
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>