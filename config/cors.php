<?php

$env = env("CORS_ALLOW");

$cors_allow = explode(',', $env);

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
     */

    /*
     * You can enable CORS for 1 or multiple paths.
     * Example: ['api/*']
     */
    'paths' => [
        'sanctum/csrf-cookie',
        'login',
        'api/*',
    ],

    /*
     * Matches the request method. `[*]` allows all methods.
     */
    'allowed_methods' => ["*"],

    /*
     * Matches the request origin. `[*]` allows all origins.
     */
    'allowed_origins' => $cors_allow,

    /*
     * Matches the request origin with, similar to `Request::is()`
     */
    'allowed_origins_patterns' => ['*'],

    /*
     * Sets the Access-Control-Allow-Headers response header. `[*]` allows all headers.
     */
    'allowed_headers' => ['*'],

    /*
     * Sets the Access-Control-Expose-Headers response header.
     */
    'exposed_headers' => ['Content-Disposition'],

    /*
     * Sets the Access-Control-Max-Age response header.
     */
    'max_age' => false,

    /*
     * Sets the Access-Control-Allow-Credentials header.
     */
    'supports_credentials' => true,

];
