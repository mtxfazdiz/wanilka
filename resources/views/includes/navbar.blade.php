
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
            </ul>






            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('register') }}">Zarejestruj</a></li>
            </ul>

            {{--<ul class="nav navbar-nav navbar-right">
                <li><a type="submit">Zaloguj</a></li>
            </ul>--}}



            {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}--}}

            <form class="navbar-form navbar-right" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary navbar-right">
                    Login
                </button>



                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="form-group">

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-mail">



                    </div>
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="hasło">

                </div>

            </form>







        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
