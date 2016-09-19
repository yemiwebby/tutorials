<html>
    <head>
        <script src="https://cdn.ably.io/lib/ably.min-1.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Token auth example</h1>
    </body>
    <script type="text/javascript">
        /* Set up a Realtime client that authenticates with the local web server auth endpoint */
        var realtime = new Ably.Realtime({ authUrl: '/auth.php' });
        realtime.connection.once('connected', function() {
            alert("We're connected using the token request from the server /auth.php endpoint!");
        });
    </script>
</html>
