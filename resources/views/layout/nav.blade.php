<nav id="nav-header">

  <ul id="nav" class="container">

    <li class="nav-item"><a class="nav-link" href="{{ URL::route('index') }}">Home</a></li>

    <li class="nav-item">
      <a class="nav-link" href="{{ URL::route('tasks') }}">Tasks</a>      
      <ul class="ddown-menu">
        <li class="ddown-nav-item"><a class="ddown-nav-link" href="{{ URL::route('tasks') }}">List</a></li>
        <li class="ddown-nav-item"><a class="ddown-nav-link" href="{{ URL::route('add-task') }}">Add</a></li>
      </ul><!--/.ddown-menu-->
    </li><!--/.nav-item-->

    <li class="nav-item">
      <a class="nav-link" href="{{ URL::route('posts') }}">Posts</a>
      <ul class="ddown-menu">
        <li class="ddown-nav-item"><a class="ddown-nav-link" href="{{ URL::route('posts') }}">List</a></li>
        <li class="ddown-nav-item"><a class="ddown-nav-link" href="{{ URL::route('add-post') }}">Add</a></li>
      </ul><!--/.ddown-menu-->      
    </li><!--/.nav-item-->

  </ul><!--/nav-->

</nav><!--/nav-header-->