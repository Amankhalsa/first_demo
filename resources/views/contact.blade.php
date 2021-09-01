@include('layouts.header')


<h3>Contact us </h3>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

</p>
@include('layouts.fotter')
{{ $name='Aman'}}<br>
<ul>
@for( $i=1;$i<11; $i++)

	

<li style="display:block;">{{"$i x 2 Table of ". $i*2 }}</li>
@endfor
</ul>
