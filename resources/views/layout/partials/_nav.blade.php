<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">EventBrote</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>
                  <p class="navbar-btn">
                  <a href="{{route('events2.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"> Creer un evenement</i></a>
                  </p>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>