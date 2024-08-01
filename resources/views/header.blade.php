<style>
    .navbar-nav .nav-link:hover {
      background-color: red; /* Background color on hover */
      color: white; /* Text color on hover */
    }
  </style>
<nav class="navbar navbar-expand-sm bg-white navbar-red">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.PNG" alt="Avatar Logo" style="width:132x ;" class="rounded-pill"> 
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
       
          <a  class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search">Job</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog">Post</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
</li>
       
      </ul>
    </div>
  </div>
</nav>