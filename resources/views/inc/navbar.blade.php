<nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-eur"> - ICEPT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
