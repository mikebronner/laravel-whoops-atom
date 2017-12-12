<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Local Sites Path
    |--------------------------------------------------------------------------
    |
    | Specify the local development folder that is synchronized with Homestead.
    | If you are not using Homestead, set this to an empty string or null.
    | This corresponds to the `-map:` line under `folders` in your
    | `Homestead.yaml` file.
    |
    | Default: ~/Code (string|null)
    |
    */
    'local-sites-path' => '~/code',

    /*
    |--------------------------------------------------------------------------
    | Homestead Sites Path
    |--------------------------------------------------------------------------
    |
    | Specify the base path where Homestead stores the synced folder with your
    | web sites. If you are not using Homestead, set this to an empty string
    | or null. This corresponds to the `to:` line under `folders` in
    | your Homestead.yaml file.
    |
    | Default: /home/vagrant/Code (string|null)
    |
    */
    'homestead-sites-path' => '/home/vagrant/code',

];
