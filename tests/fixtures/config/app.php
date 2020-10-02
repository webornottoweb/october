<?php
// Fixture used for `october:env` unit tests in `tests/unit/system/console/OctoberEnvTest.php

return [
    'debug' => env('APP_DEBUG', true),
    'url' => env('APP_URL', 'https://localhost'),
    'key' => 'CHANGE_ME!!!!!!!!!!!!!!!!!!!!!!!',
    'timezone' => 'UTC',
];
