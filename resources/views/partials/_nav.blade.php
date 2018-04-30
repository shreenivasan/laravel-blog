<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/')}}">Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/')}}">Home</a></li>                
                <li class="{{ Request::is('about') ? 'active' : '' }}" ><a href="{{ url('/about')}}">About</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}" ><a href="{{ url('/contact')}}">Contact</a></li>
                
            </ul>            
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
        <!--                    <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>-->
                            <li><a href="#">Log out</a></li>
                            </ul>
                    </li>
                    @endif              
                    @if(Auth::guest())
                    <li><a href="{{ url('/login') }}" class="">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="">Register</a></li>
                    @endif
                
            </ul>
        
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>