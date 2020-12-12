@if(Auth::user()->role <= 4)
<li class="{{ Request::is('livres*') ? 'active' : '' }}">
    <a href="{{ route('livres.index') }}"><i class="fa fa-book"></i><span>Livres</span></a>
</li>
@endif
@if(Auth::user()->role <= 1)
    <li class="{{ Request::is('emprunts*') ? 'active' : '' }}">
        <a href="{{ route('emprunts.index') }}"><i class="fa fa-edit"></i><span>Emprunts</span></a>
    </li>
@endif
@if(Auth::user()->role == 0 )
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Utilisateurs</span></a>
</li>
@endif


