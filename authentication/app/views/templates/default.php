<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> Website | {% block title %} {% endblock %}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>

	<body>
		{% include 'templates/partials/navigation.php'%}
		{% include 'templates/partials/messages.php'%}
		{% block content %} {% endblock %}
	</body>

</html>