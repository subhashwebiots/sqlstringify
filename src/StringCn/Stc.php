<?php

return [
    'name' => 'Install',
    'configuration' => [
        'version' => [
            'PHP >= 8.1' => '8.1',
        ],
        'extensions' => [
            'Bcmath',
            'Ctype',
            'fileinfo',
            'JSON',
            'Mbstring',
            'Openssl',
            'Pdo',
            'Tokenizer',
            'Xml',
        ],
    ],
    'writables' => [
        'storage',
        'bootstrap/cache',
    ],
    'migration' => '.migration',
    'key' => '',
    'domain' => '',
    'app' => [
        'APP_NAME' => 'Chatloop',
        'APP_ENV' => '',
        'APP_DEBUG' => 'true',
        'APP_URL' => 'http://127.0.0.1:8000',
    ],

    'installation' => 'installation.json',
];
