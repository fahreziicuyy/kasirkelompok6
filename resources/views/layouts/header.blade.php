<nav class="main-header navbar navbar-static-top">
    <!-- Left navbar links -->
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <span class="fas fa-bars"></span>
      </a>
    <div class="navbar-custom-menu">
      <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown" data-toggle="dropdown">
            <div class="image">
              <img src="{{ url(auth()->user()->foto) }}" class="user-image img-profil" alt="User Image">
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </div>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="{{ url(auth()->user()->foto) }}" class="user-image img-profil" alt="User Image">
              <p>
                {{ auth()->user()->name }} - {{ auth()->user()->email }}
              </p>
            </li>
            <li class="user-footer" style="display: flex; gap: 20px; justify-content: space-between;">
              <div style="margin-right: 40px;">
                <a href="{{ route('user.profil') }}" class="btn btn-default btn-flat">Profil</a>
              </div>
              <div style="margin-left: 60px;">
                <a href="#" class="btn btn-default btn-flat"
                onclick="$('#logout-form').submit()">Logout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
   

  </nav>

  <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
  </form>
