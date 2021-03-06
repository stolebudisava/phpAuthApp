<?php

use AuthApp\User\UserPermission;

$app->get('/register', $guest(), function() use ($app){
    $app->render('auth/register.php');
})->name('register');

$app->post('/register', $guest(), function() use ($app) {

    $request = $app->request;

    $email = $request->post('email');
    $username = $request->post('username');
    $password = $request->post('password');
    $passwordConfirm = $request->post('password_confirm');
    $firstName = $request->post('first_name');
    $lastName = $request->post('last_name');

    $v = $app->validation;

    $v->validate([
        'email' => [$email, 'required|email|uniqueEmail'],
        'username' =>[$username, 'required|alnumDash|max(20)|uniqueUsername'],
        'password' =>[$password, 'required|min(6)'],
        'password_confirm' =>[$passwordConfirm, 'required|matches(password)'],
        'first_name' =>[$firstName, 'required|alnumDash|max(20)'],
        'last_name' =>[$lastName, 'required|alnumDash|max(20)']
    ]);

    if($v->passes()) {

        $identifier = $app->randomlib->generateString(128);

        $user = $app->user->create([
            'email'=>$email,
            'username'=>$username,
            'password'=>$app->hash->password($password),
            'active' => false,
            'active_hash' => $app->hash->hash($identifier),
            'first_name' => $firstName,
            'last_name' => $lastName

        ]);

        $user->permissions()->create(UserPermission::$defaults);

        $app->mail->send('email/auth/registered.php', ['user'=>$user, 'identifier' => $identifier ], function($message) use ($user) {
            $message->to($user->email);
            $message->subject('Thanks for registering.');
        });


        $app->flash('global', 'You have been registered.');
        $app->response->redirect($app->urlFor('home'));
    }

    $app->render('auth/register.php', [
        'errors' => $v-> errors(),
        'request' => $request,
    ]);

})->name('register.post');