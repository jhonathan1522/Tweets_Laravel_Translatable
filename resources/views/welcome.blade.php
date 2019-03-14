<!doctype html>
<html lang="{{app()->getlocale()}}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body>
    <h1>@lang('home.title_menu')!</h1>
    <a href="{{url('posts')}}" class="btn btn-primary pull-right">Nuevo</a>

    <form action="{{URL('posts')}}" method="POST">
    {{csrf_field()}}

    <div class="form-group">
      <label for="name" class="control-label">Codigo</label>
      <input type="text" name="code" class="form-control">
    </div>
    </form>

    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<!--  <a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">@lang('home.home_menu') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">@lang('home.about_menu') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">@lang('home.contact_menu') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">@lang('home.help_menu') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('home.change_language_menu')
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="locale/es">@lang('home.spanish_menu') </a>
          <a class="dropdown-item" href="locale/en">@lang('home.english_menu')</a>        
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="@lang('home.search_menu')..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@lang('home.search_menu')</button>
    </form>
  </div>
</nav>

    </div>

    <div class="content">
      <div class="id m-b-md">
      {{$post->id}}
      </div>
    </div>

    <div>
      <h4>codigo:{{$post->code}}</h4>
    </div>


    <div class="panel-body">

        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Mis Tweets</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Tweets
                    </button>
                </div>
            </div>
        </form>
           <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Code</th>
              </tr>
            </thead>

          <tbody>
<!--
          @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}<td>
            <td>{{$post->code}}<td>
          </tr>
          @endforeach
          -->

          
         </tbody>
          </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>