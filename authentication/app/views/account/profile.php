{% extends 'templates/default.php' %}
{% block title %} Update profile {% endblock %}

{% block content %}
    <form action="{{ urlFor('account.profile.post') }}" method="post" autocomplete="off">
        <div>
            <label for="email"> Email </label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <label for="first_name"> First name </label>
            <input type="text" name="first_name" id="first_name">
        </div>

        <div>
            <label for="last_name"> Last name </label>
            <input type="text" name="last_name" id="last_name">
        </div>

        <div>
            <input type="submit" value="Update">
        </div>

        <input type="hidden" name="{{csrf_key}}" value="{{csrf_token}}">

    </form>
{% endblock %}