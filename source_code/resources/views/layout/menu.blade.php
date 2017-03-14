<nav class="navbar navbar-inverse backgroup-menu">
    <div class="container-fluid col-md-12">
	    <div class="navbar-header col-md-3">
	    	<a class="navbar-brand" href="#">{{trans('languages.title-web')}}</a>
	    </div>
	    <ul class="nav  col-md-6">
			<li class="active col-md-2" ><a href="#">Home</a></li>
			<li class="col-md-2" ><a href="#">Page 1</a></li>
			<li class="col-md-2" style="float:left;"><a href="#">Page 2</a></li>
	    </ul>
	    <ul class="nav  col-md-3">
			<li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
    </div>
</nav>