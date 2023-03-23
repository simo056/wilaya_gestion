 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
    <div class="menu_section">
      <h3>General</h3>
{{-- <<<<<<< HEAD --}}
      <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Activités </a>
          {{-- <ul class="nav child_menu">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="index2.html">Dashboard2</a></li>
            <li><a href="index3.html">Dashboard3</a></li>
          </ul> --}}
        </li>
        <li><a href="{{ route('utilisateur.index') }}"><i class="fa fa-user"></i> 
          Utilisateur </a>
          
        </li>
        @if(Auth::user()->id_role == 1)
        <li><a href="{{route('thematique.index')}}"><i class="fa fa-list-alt""></i>Thématique</a>
        @endif
          
        </li>
        
    </div>

=======
        <ul class="nav side-menu">
          <li><a href="home"><i class="fa fa-home"></i> Activités </a></li>
        <li> <a href="{{ route('utilisateur.index') }}"><i class="fa fa-user"></i> Utilisateur </a></li>
          @if(Auth::user()->id_role == 1)
          <li><a href="{{route('thematique.index')}}"><i class="fa fa-list-alt"></i>Thématique</a></li>
          @endif
</ul>
    </div>
>>>>>>> 35fea0c53616082690bdc2d9ee4d1c84f96323e3
  </div>