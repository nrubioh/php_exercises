<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class = "navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class= "container">
            <a href="/" class="navbar-brand h1"> FW </a>
            <ul class = "navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>   
            </ul>
        </div>
    </nav>
    <div class = "container">
        <div class = "row">
            <?php echo $content;?>
        </div>
    </div>
</body>
</html>