<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">

    <div class="sidebar-header">

        <a class="brand-mark" href="#">

            <span class="brand-icon">
                <i class="bi bi-grid-1x2-fill"></i>
            </span>

            <span class="brand-copy">

                <span class="brand-title">
                    adminHMD
                </span>

                <span class="brand-subtitle">
                    Admin Template
                </span>

            </span>

        </a>

    </div>

    <nav class="sidebar-nav">

        {{-- DASHBOARD --}}
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
            href="{{ route('admin.dashboard') }}">

            <span class="nav-icon">
                <i class="bi bi-speedometer2"></i>
            </span>

            <span class="nav-text">
                Dashboard
            </span>

        </a>

        {{-- ROLE --}}

            <a class="nav-link {{ request()->routeIs('role.index') ? 'active' : '' }}"
                href="{{ route('role.index') }}">

                <span class="nav-icon">
                    <i class="bi bi-person-fill-gear"></i>
                </span>

                <span class="nav-text">
                    Role
                </span>

            </a>

        {{-- USERS --}}
        <a class="nav-link {{ request()->routeIs('admin.user') ? 'active' : '' }}"
            href="{{ route('admin.user') }}">

            <span class="nav-icon">
                <i class="bi bi-people"></i>
            </span>

            <span class="nav-text">
                Users
            </span>

        </a>

        {{-- PROFILE --}}
        <a class="nav-link" href="{{ route('admin.profile') }}">

            <span class="nav-icon">
                <i class="bi bi-person-badge"></i>
            </span>

            <span class="nav-text">
                Profile
            </span>

        </a>

        {{-- FRONTEND CMS DROPDOWN --}}
        <div class="cms-dropdown ">

            <button class="cms-dropdown-btn hytyt" type="button">

                <div class="my_flex">

                    <span class="nav-icon">
                        <i class="bi bi-layout-text-window"></i>
                    </span>

                    <span class="nav-text yyyyold">
                        Frontend CMS
                    </span>

                </div>

                <i class="bi bi-chevron-down dropdown-arrow"></i>

            </button>

            <div class="cms-dropdown-menu">

                <a class="nav-link" href="{{ route('hero_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>

                    <span class="nav-text">
                        Hero Section
                    </span>

                </a>

                <a class="nav-link" href="{{ route('step_process_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>

                    <span class="nav-text">
                        Step Process Section
                    </span>

                </a>

                <a class="nav-link" href="{{ route('academic_services_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>

                    <span class="nav-text">
                        Academic Services Section
                    </span>

                </a>

                <a class="nav-link" href="{{ route('assignments_title_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>

                    <span class="nav-text">
                        Assignments Title Section
                    </span>

                </a>

                <a class="nav-link" href="{{ route('works_best_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>

                    <span class="nav-text">
                        Works Best Section
                    </span>

                </a>

                <a class="nav-link" href="{{ route('how_work_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>
                    <span class="nav-text">
                        How Work Section
                    </span>

                </a>

                <a class="nav-link" href="{{ route('res_hero.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>
                    <span class="nav-text">
                        Resource Heroes
                <a class="nav-link {{ request()->routeIs('featured_article.*') ? 'active' : '' }}" href="{{ route('featured_article.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-newspaper"></i>
                    </span>

                    <span class="nav-text">
                        Featured Articles
                    </span>

                </a>

                <a class="nav-link {{ request()->routeIs('res_guides.*') ? 'active' : '' }}" href="{{ route('res_guides.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-file-earmark"></i>
                    </span>
                    <span class="nav-text">
                        Resource Guides
                    </span>

                </a>

                <a class="nav-link {{ request()->routeIs('blog_article.*') ? 'active' : '' }}" href="{{ route('blog_article.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-journal-text"></i>
                    </span>

                    <span class="nav-text">
                        Blog / Articles
                    </span>

                </a>

                <a class="nav-link {{ request()->routeIs('services_section.*') ? 'active' : '' }}" href="{{ route('services_section.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-journal-text"></i>
                    </span>

                    <span class="nav-text">
                        Service
                    </span>

                </a>

                <a class="nav-link {{ request()->routeIs('res_tools.*') ? 'active' : '' }}" href="{{ route('res_tools.index') }}">

                    <span class="nav-icon">
                        <i class="bi bi-journal-text"></i>
                    </span>

                    <span class="nav-text">
                        Resource Tool
                    </span>

                </a>

                <a class="nav-link {{ request()->routeIs('res_articles.*') ? 'active' : '' }}" href="{{ route('res_articles.create') }}">
                    <span class="nav-icon">
                        <i class="bi bi-journal-text"></i>
                    </span>
                    <span class="nav-text">
                        Resource Articles
                    </span>
                </a>

            </div>

        </div>

    </nav>

    <div class="sidebar-user">

        <strong>

            {{ auth()->user()->name }}

        </strong>

    </div>

</aside>


<style>
    .hytyt:hover,
    .hytyt:focus,
    .hytyt.active {
        /* background: var(--admin-sidebar-soft);
  color: #ffffff !important; */
        transform: translateX(2px);

        background: var(--admin-sidebar-soft);
  
    }
 .cms-dropdown-menu .nav-link {
padding-top: 5px !important;
padding-bottom: 5px !important;


}
    .cms-dropdown-menu .nav-text {
        font-size: 13px;                
    }

    .my_flex {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .hytyt {
        border-radius: 8px;
        transition: background 0.16s ease, color 0.16s ease, transform 0.16s ease;
    }


    .hytyt:hover .yyyyold{
              color: var(--admin-sidebar-text-strong) !important;
    }

    .yyyyold {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        /* min-height: 48px; */
        /* padding: 0.78rem 0.9rem; */
        border-radius: 8px;
        color: var(--admin-sidebar-text);
        font-weight: 700;
        /* transition: background 0.16s ease, color 0.16s ease, transform 0.16s ease; */
        white-space: nowrap;
    }

    .cms-dropdown {
        width: 100%;
    }

    .cms-dropdown-btn {

        width: 100%;
        border: none;
        background: none;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 12px 16px;


        cursor: pointer;
    }

    .cms-dropdown-menu {
        display: none;
    }

    .cms-dropdown.active .cms-dropdown-menu {
        display: block;
    }

    .dropdown-arrow {
        transition: 0.3s;
    }

    .cms-dropdown.active .dropdown-arrow {
        transform: rotate(180deg);
    }

</style>


<script>
    document.addEventListener("DOMContentLoaded", function () {

        const dropdown = document.querySelector(".cms-dropdown");

        const btn = document.querySelector(".cms-dropdown-btn");

        btn.addEventListener("click", function () {

            dropdown.classList.toggle("active");

        });

    });

</script>
