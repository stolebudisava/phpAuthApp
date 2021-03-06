{% extends 'templates/default.php' %}
{% block title %} {{ user.getFullNameOrUsername() }} {% endblock %}

{% block content %}

<h2> {{ user.username}} </h2>
<img src="{{user.getAvatarUrl({ size:30 }) }}" alt="Profile picture for {{ user.getFullNameOrUsername() }}"> </img>
<dl>
    {% if user.getFullName() %}
    <dt> Full name </dt>
    <dd> {{user.getFullName() }} </dd>
    {% endif %}

    <dt> Email </dt>
    <dd> {{ user.email }} </dd>
</dl>
{% endblock %}