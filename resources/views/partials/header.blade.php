<header class="start_header">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand weblogo" href="#"><img src="{{ asset('/assets/frontend/images/logo.svg') }}" alt=""></a>
                <button class="navbar-toggler navbar-togglerbutton" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="search_flex_form" role="search">
                        <div>
                            <a class="nav-link navlinks" href="#">Home</a>
                        </div>
                        <div>
                            <a class="nav-link navlinks" href="#">How It works</a>
                        </div>
                        <div>
                            <a class="nav-link navlinks" href="#">Services</a>
                        </div>
                        <div>
                            <a class="nav-link navlinks" href="#">AI Studys Tools</a>
                        </div>
                        <a href="{{route('admin.dashboard')}}" class="btn btn-outline-success_button" type="submit">Get Started</a>
                    </form>
                </div>

            </nav>
        </div>
    </header>