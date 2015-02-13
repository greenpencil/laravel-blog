<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Blog</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="/">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="user/greenencil">greenpencil</a></li>
            </ul>
        </div>
    </div>
</div>