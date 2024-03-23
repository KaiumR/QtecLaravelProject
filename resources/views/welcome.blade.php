<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <section id="nav-bar">
    
        <nav class="navbar bg-body-tertiary">
            <form>
                <div class="input-group">
                    <a class="navbar-brand" href="#">Steadfast Courier</a>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                    <button class="btn" type="submit">Guest</button>
                </div>
                
            </form>
        </nav>
    </section>
    <section class="body-cont">
        <div class="cont1">
            <div class="header">
                <h1 class="top_header">welcome to Notepad</h1>
            </div>
            <div class="img">
                `<img src="{{asset('img/note.png')}}" alt="an image" />
            </div>
        </div>
        <div class="cont2">
            <h3>You need to log in to use the features, click <a href="{{url('/')}}/login">here</a> to log in.</h3>
        </div>
    </section>
    
</body>
</html>