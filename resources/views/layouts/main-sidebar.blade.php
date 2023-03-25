 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
    <div class="menu_section">

        <ul class="nav side-menu">
          <li><a href="home"><i class="fa fa-home"></i> Activités </a></li>
        <li> <a href="{{ route('utilisateur.index') }}"><i class="fa fa-user"></i> Utilisateur </a></li>
          @if(Auth::user()->id_role == 1)
          <li><a href="{{route('thematique.index')}}"><i class="fa fa-list-alt"></i>Thématique</a></li>
          @endif
</ul>
    </div>

  </div>