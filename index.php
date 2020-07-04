<!DOCTYPE <!DOCTYPE html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vibe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>

</head>
<body>
    <div class="header">
        <form method="POST" action="connect.php">
            <h1> Search one way flights </h1>
            <div class="form-box">
                <input type="text" class="search-field From" placeholder="From"> 
                <input type="text" class="search-field Destination" placeholder="Destination">  
                <input type="date" class="search-field date" placeholder="date" min="2020-03-24">
                <button class="search-btn" type="button">Search</button>
        </form>
        </div>
    </div>
</body>
</html>