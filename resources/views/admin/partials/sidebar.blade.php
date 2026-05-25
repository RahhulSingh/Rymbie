<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
          <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
          <span class="brand-copy">
            <span class="brand-title">adminHMD</span>
            <span class="brand-subtitle">Admin Template</span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"href="{{ route('admin.dashboard') }}">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link {{ request()->routeIs('role.index') ? 'active' : '' }}"href="{{ route('role.index') }}">
          <span class="nav-icon"><i class="bi bi-person-fill-gear" aria-hidden="true"></i></i></span>
          <span class="nav-text">Role</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.user') ? 'active' : '' }}" href="{{route('admin.user')}}">
          <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">Users</span>
        </a>
        <a class="nav-link" href="{{route('admin.add-user')}}">
          <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
          <span class="nav-text">Add User</span>
        </a>
        <a class="nav-link" href="{{route('admin.profile')}}">
          <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
          <span class="nav-text">Profile</span>
        </a>
        <a class="nav-link" href="charts.html">
          <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
          <span class="nav-text">Charts</span>
        </a>
        <a class="nav-link" href="{{route('admin.table')}}">
          <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
          <span class="nav-text">Tables</span>
        </a>
        <a class="nav-link" href="forms.html">
          <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
          <span class="nav-text">Forms</span>
        </a>
        <a class="nav-link" href="components.html">
          <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
          <span class="nav-text">Components</span>
        </a>
        <a class="nav-link" href="alerts.html">
          <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
          <span class="nav-text">Alerts</span>
        </a>
        <a class="nav-link" href="modals.html">
          <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
          <span class="nav-text">Modals</span>
        </a>
        <a class="nav-link" href="settings.html">
          <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
          <span class="nav-text">Settings</span>
        </a>
        <a class="nav-link" href="blank.html">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Blank Page</span>
        </a>

        <a class="nav-link" href="{{route('hero_section.index')}}">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Hero Section</span>
        </a>
        <a class="nav-link" href="{{route('step_process_section.index')}}">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Step Process Section</span>
        </a>
        <a class="nav-link" href="{{route('academic_services_section.index')}}">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Academic Services Section</span>
        </a>
      </nav>

      <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="../assets/images/avatar/avatar.jpg" alt="Admin Hasan">
        <strong>Admin Hasan</strong>
        <small>Active Workspace</small>
      </div>

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>


    