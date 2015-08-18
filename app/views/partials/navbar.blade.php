<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Opti-Stretch</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::segment(1) == '' ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::segment(1) == 'company-overview' ? 'active' : '' }}"><a href="/company-overview">Company Overview</a></li>
                <li class="{{ Request::segment(1) == 'biographies' ? 'active' : '' }}"><a href="/biographies">Biographies</a></li>
                <li class="{{ Request::segment(1) == 'in-the-media' ? 'active' : '' }}"><a href="/in-the-media">In The Media</a></li>
                <li class="{{ Request::segment(1) == 'frequently-asked-questions' ? 'active' : '' }}"><a href="/frequently-asked-questions">FAQ's</a></li>
                <li class="{{ Request::segment(1) == 'classes' ? 'active' : '' }}"><a href="/classes">Classes</a></li>
                <li class="{{ Request::segment(1) == 'testimonials' ? 'active' : '' }}"><a href="/testimonials">Testimonials</a></li>
                <li class="{{ Request::segment(1) == 'knowledge-base' ? 'active' : '' }}"><a href="/knowledge-base">Knowledge Base</a></li>
                @if (Auth::guest())
                <li class="{{ Request::segment(1) == 'users' ? 'active' : '' }}"><a href="/users/login">Login/Signup</a></li>
                @else
                <li><a href="/users/logout">Logout</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
