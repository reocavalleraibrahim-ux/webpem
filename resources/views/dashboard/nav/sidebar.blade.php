 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <h3 style="color:white; font-family:unageo; font-weight:500;">{{session('name')}}</h3>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label data-i18n="Navigation">Navigation</label>
        </li>
        <li class="pc-item">
          <a href="{{ url('/dashboard')}}" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-house-line"></i>
            </span>
            <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
          </a>
        </li> 

        <li class="pc-item pc-caption">
          <label data-i18n="pages">Master</label>
          <i class="ph ph-shield-checkered"></i>
        </li>
        <li class="pc-item">
          <a href="{{url('/slider')}}" class="pc-link">
            <span class="pc-micon"> <i class="ph ph-image"></i></span>
            <span class="pc-mtext">Slider</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{url('/berita')}}" class="pc-link">
            <span class="pc-micon"> <i class="ph ph-newspaper"></i></span>
            <span class="pc-mtext">Berita</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label data-i18n="pages"></label>
          <i class="ph ph-shield-checkered"></i>
        </li>

        <li class="pc-item">
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit" style="border:none; background-color:transparent;cursor: pointer; display: inline-flex;align-items: center; width:100%;" class="pc-link" >
                    <span class="pc-micon">
                        <i class="ph ph-power"></i>
                    </span>
                    <span class="pc-mtext" >Logout</span>
                </button>
            </form>
        </li>
      </ul>      
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->