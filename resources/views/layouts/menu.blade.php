<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Utilisateurs</span></a>
</li>

<li class="{{ Request::is('livres*') ? 'active' : '' }}">
    <a href="{{ route('livres.index') }}"><i class="fa fa-book"></i><span>Livres</span></a>
</li>

