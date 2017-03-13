
<ul>
    <li> <a href="{{ urlFor('home') }}"> Home </a> </li>

    {% if auth %}
        <li> <a href="{{ urlFor('logout') }}"> Log out </a> </li>
        <li> <a href="{{ urlFor('user.profile', {username: auth.username}) }}"> Your profile </a> </li>
    {% else %}
        <li> <a href="{{ urlFor('register') }}"> Register </a> </li>
        <li> <a href="{{ urlFor('login') }}"> Login </a> </li>
    {% endif %}
        <li> <a href="{{ urlFor('user.all') }}"> All users </a> </li>

</ul>