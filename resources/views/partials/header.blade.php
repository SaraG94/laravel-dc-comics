<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <header class="main-header">
        <div class="container">
           <h1>DC comics</h1>
        </div>
        <div class="container">
            <ul class="nav-header">
                <li>
                    <a href="{{ route('home') }}">Home </a>
                </li>
                <li>
                    <a href="{{ route('comics.index') }}">All comics </a>
                </li>
                <li>
                    <a href="{{ route('comics.create') }}">Insert a comic</a>
                </li>
            </ul>
        </div>
    </header>
</body>
</html>