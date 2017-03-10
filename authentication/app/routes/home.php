<?php

$app->get('/', function() use ($app) {
/*
    $user = $app->auth;
    $app->mail->send('email/auth/registered.php', ['user'=>$user], function($message) use ($user) {
        $message->to($user->email);
        $message->subject('Thanks for registering.');
    });
*/

	$app->render('home.php');
})->name('home');

