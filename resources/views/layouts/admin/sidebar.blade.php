<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="#" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{ route('admin.home') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Master</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="{{ route('adm-period.index') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-typography"></i></span>
            <span class="pc-mtext">Period</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{ route('adm-student.index') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
            <span class="pc-mtext">Student</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{ route('adm-sclass.index') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
            <span class="pc-mtext">Student Class</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>