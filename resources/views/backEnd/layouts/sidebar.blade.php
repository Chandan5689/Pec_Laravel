<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="/"><img src="{{asset('images/logo/logo.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class={{ Request::url() == url('/getNumbers') ? 'active' : '' }}>
                    <a href="/getNumbers"> <i class="menu-icon fa fa-sort-numeric-asc"></i>PEC in Numbers</a>
                </li>
                <li class={{ Request::url() == url('/getServices') ? 'active' : '' }}>
                    <a href="/getServices"> <i class="menu-icon fa fa-list-alt"></i>Services</a>
                </li>
                <li class={{ Request::url() == url('/getBlogs') ? 'active' : '' }}>
                    <a href="/getBlogs"> <i class="menu-icon fa fa-pencil"></i>Blog</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
