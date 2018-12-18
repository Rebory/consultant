<!-- @if (Auth::guard('web')->check())
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="{{ url('/users/logout') }}">Logout</a></li>
</ul>
@endif -->



@if (Auth::user()->active ==='N')
<label>Please verify mobile Number </label>
@endif

<!-- @component('components.publicLoginCheck')
@endcomponent
 -->

 <!-- use this code in blade for use -->

