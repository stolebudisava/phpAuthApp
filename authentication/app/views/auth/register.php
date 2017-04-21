{% extends 'templates/default.php' %}

{% block title %} Register {% endblock %}

{% block content %}
    <form action="{{ urlFor('register.post') }}" method="post" autocomplete="off">
        <div>
            <label for="email"> Email </label>
            <input type="text" name="email" id="email" {% if request.post('email') %} value="{{request.post('email')}}" {%endif%}>
            {% if errors.has('email')%} {{errors.first('email')}} {% endif %}
        </div>

        <div>
            <label for="username"> Username </label>
            <input type="text" name="username" id="username" {% if request.post('username') %} value="{{request.post('username')}}" {%endif%}>
            {% if errors.has('username')%} {{errors.first('username')}} {% endif %}
        </div>

        <div>
            <label for="password"> Password </label>
            <input type="password" name="password" id="password">
            {% if errors.has('password')%} {{errors.first('password')}} {% endif %}
        </div>

        <div>
            <label for="password_confirm">Confirm Password </label>
            <input type="password" name="password_confirm" id="password_confirm">
            {% if errors.has('password_confirm')%} {{errors.first('password_confirm')}} {% endif %}
        </div>

        <div>
            <label for="first_name"> First name </label>
            <input type="text" name="first_name" id="first_name" {% if request.post('first_name') %} value="{{request.post('first_name')}}" {%endif%}>
            {% if errors.has('first_name')%} {{errors.first('first_name')}} {% endif %}
        </div>

        <div>
            <label for="last_name"> Last name </label>
            <input type="text" name="last_name" id="last_name" {% if request.post('last_name') %} value="{{request.post('last_name')}}" {%endif%}>
            {% if errors.has('last_name')%} {{errors.first('last_name')}} {% endif %}
        </div>

        <div>
            <input type="submit" value="Register">
        </div>

        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">

    </form>

{% endblock %}