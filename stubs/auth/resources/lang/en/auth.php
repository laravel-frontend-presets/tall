<?php

return [
     /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'passwords' => [
        'confirm' => [
            'heading' => 'Confirm your password',
            'subtitle' => 'Please continue your password before continuing',
            'forgot_password_link' => 'Forgot your password?',
            'confirm_password_action' => 'Confirm password'
        ],
        'email' => [
            'heading' => 'Reset password',
            'send_password_reset_link_action' => 'Send password reset link'
        ],
        'reset' => [
            'heading' => 'Reset password',
            'confirm_password_action' => 'Confirm Password',
            'reset_password_action' => 'Reset Password'
        ],
    ],
    'login' => [
        'heading' => 'Sign in to your account',
        'subtitle' => [
            'pre' => 'Or',
            'link' => 'create a new account',
        ],
        'remember_label' => 'Remember',
        'forgot_password_link' => 'Forgot your password?',
        'sign_in_action' => 'Sign in',
    ],
    'register' => [
        'heading' => 'Create a new account',
        'subtitle' => [
            'pre' => 'Or',
            'link' => 'sign in to your account',
        ],
        'confirm_password_label' => 'Confirm Password',
        'register_action' => 'Register'
    ],
    'verify' => [
        'heading' => 'Verify your email address',
        'subtitle' => [
            'pre' => 'Or',
            'link' => 'sign out',
        ],
        'resent_verification_link' => 'A fresh verification link has been sent to your email address.',
        'check_email_for_link' => 'Before proceeding, please check your email for a verification link.',
        'email_not_received' => [
            'pre' => 'If you did not receive the email, ',
            'link' => 'click here to request another.',
        ]
    ],

    'labels' => [
        'email' => 'Email address',
        'password' => 'Password',
        'username' => 'Name',
        
    ],
];
