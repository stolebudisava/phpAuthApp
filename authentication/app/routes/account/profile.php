<?php

$app->get('/account/profile', $authenticated(), function() use ($app){
    $app->render('account/profile.php');
})->name('account.profile');

$app->post('/account/profile', $authenticated(), function() use ($app){

    $user = $app->auth;

    $request = $app->request;

    $email = $request->post('email');
    $firstName = $request->post('first_name');
    $lastName = $request->post('$last_name');

    $v = $app->validation;

    $v->validate([
        'email' => [$email, 'required|email|uniqueEmail'],
        'first_name' => [$firstName, 'alpha|max(50)'],
        'last_name' => [$lastName, 'alpha|max(50)']
    ]);

    if($v->passes()) {
        $user->update([
            'email'
        ]);
    }

})->name('account.profile.post');