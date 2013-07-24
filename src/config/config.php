<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Enable emailing errors
    |--------------------------------------------------------------------------
    |
    | Should we email error traces?
    |
    */
    'enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | Skip emailing errors for some HTTP status codes
    |--------------------------------------------------------------------------
    |
    | For which HTTP status codes should we NOT send error emails?
    |
    */
    'disabledStatusCodes' => array(
        '404' => true,
    ),

    /*
    |--------------------------------------------------------------------------
    | Error email recipients
    |--------------------------------------------------------------------------
    |
    | Email stack traces to these addresses.
    |
    */

    'to' => array('address' => null, 'name' => null),
);