<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>
<body>




<!-- <div class="container mt-3 "> -->

    <div class="row">
        <div class="col-md-2">
            <div class="sidebar">
   
                <div class="form-inline">
        
      

     
                                            <nav class="mt-2  ">
                                                <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                                                
                                                <li class="nav-item ">
                                                    <a href="/products" class="nav-link ">
                                                    <p>
                                                        Home
                                                    </p>
                                                    </a>
                                                    <ul class="nav-item ">
                                                    <li class="nav-item">
                                                        <a href="/teachers" class="nav-link ">
                                                        <p>Teachers</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="./subjects" class="nav-link">
                                                        <p>Subjects</p>
                                                        </a>
                                                    </li>
                                                   
                                                    </ul>
                                                </li>
                                               
                                                </ul>
                                            </nav>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="m-2 "></div>
            <!-- Another variation with a button -->
            <form action="{{route('search')}}" method="post">
            @csrf
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search this blog">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            @yield('content')





</body>
</html>

