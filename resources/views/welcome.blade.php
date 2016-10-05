<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Refresh Server</title>
</head>
<body>
<h3>Who am I?</h3>
<p>This is the refresh server</p>

<form>
    <input type="text" id="chat">
    <button id="send">Send</button>
</form>

<ul id="messages"></ul>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.8/socket.io.min.js"></script>
<script type="text/javascript">
    var socket = io('http://192.168.10.10:3000');

    var messages = document.getElementById('messages');
    socket.on('public-channel:App\\Events\\UserHasRegistered', function(data) {
        console.log('got data: ', data);
        var node = document.createElement('div');
        node.innerHTML = '<p>' + data.name + '</p>';
        messages.appendChild(node);
    });
</script>
</body>
</html>