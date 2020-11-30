<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Utilisateurs</span></a>
</li>

<li class="{{ Request::is('livres*') ? 'active' : '' }}">
    <a href="{{ route('livres.index') }}"><i class="fa fa-edit"></i><span>Livres</span></a>
</li>

