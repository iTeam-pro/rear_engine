<?php
$config = [
    [
        'plugin' => 'RearEngine',
        'key' => 'Cache.default.duration',
        'title' => 'Cache lifetime',
        'description' => 'in seconds',
        'default' => '300',
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Cache.default.className',
        'title' => 'Cache engine',
        'description' => 'Choose engine for cache storage (default: File). Always choose <strong>File</strong> if you are not sure in other options',
        'cell' => 'RearEngine.CacheEngine',
        'default' => 'File',
        'options' => [
            "type" => "select",
            "options" => [
                "File" => "File (default)",
                "Apc" => "APC",
                "Wincache" => "Wincache",
                "Xcache" => " Xcache",
                "Memcached" => "Uses",
                "Redis" => "Redis"
            ]
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Cache.default.probability',
        'title' => 'Cache probability',
        'description' => 'in seconds',
        'default' => '100',
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Cache.check',
        'title' => 'Static cache',
        'description' => 'Enable full page caching. Usable for huge sites but may cache dynamic blocks',
        'default' => '0',
        'options' => [
            "type" => "radio",
            "options" => [
                "0" => "No",
                "1" => "Yes"
            ]
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Meta.description',
        'title' => 'Meta description',
        'default' => 'My site for any people',
        'options' => [
            "type" => "textarea"
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Meta.generator',
        'title' => 'Meta generator',
        'default' => 'RearEngine - helpful plugin for apps bakers',
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Meta.keywords',
        'title' => 'Meta keywords',
        'default' => 'RearEngine, CakePHP admin, plugin',
		'options' => [
			"type" => "textarea"
		],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Meta.robots',
        'title' => 'Robots directive',
        'default' => 'index, follow',
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Session.defaults',
        'title' => 'Session engine',
        'description' => 'Choose engine for session storage. Database is prefered for small sites. PHP for big sites under heavy traffik',
        'default' => 'php',
        'options' => [
            "type" => "radio",
            "options" => [
                "php" => "PHP sessions",
                "database" => "Database"
            ]
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Session.timeout',
        'title' => 'Session timeout',
        'description' => 'in minutes',
        'default' => '15',
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'debug',
        'title' => 'Debug mode',
        'description' => 'Choose debug level for your site (default: File). If your site is ready for visitors, please choose <strong>Production</strong>.  <strong>Debug</strong> recommended if you want to track errors.',
        'default' => '1',
        'options' => [
            "type" => "radio",
            "options" => [
                "0" => "Production",
                "1" => "Debug"
            ]
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'App.theme',
        'title' => 'Frontend theme',
        'editable' => false,
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'App.status',
        'title' => 'Enabled for visitors',
        'default' => '1',
        'options' => [
            "type" => "radio",
            "options" => [
                "0" => "Offline",
                "1" => "Online"
            ]
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'App.timezone',
        'title' => 'Site timezone',
        'description' => 'zero (0) for GMT',
        'default' => '0',
        'options' => [
            "type" => "select",
            "options"=> [
                "-12" => "(GMT -12:00) International Date Line West",
                "-11" => "(GMT -11:00) Midway Island",
                "-10" => "(GMT -10:00) Hawaii",
                "-9" => "(GMT -9:00) Alaska",
                "-8" => "(GMT -8:00) Pacific Time",
                "-7" => "(GMT -7:00) Mountain Time",
                "-6" => "(GMT -6:00) Central Time",
                "-5" => "(GMT -5:00) Eastern Time",
                "-4" => "(GMT -4:00) Atlantic Time",
                "-3" => "(GMT -3:00) Greenland",
                "-2" => "(GMT -2:00) Brazil, Mid-Atlantic",
                "-1" => "(GMT -1:00) Portugal",
                "0" => "(GMT +0:00) Greenwich Mean Time (default)",
                "+1" => "(GMT +1:00) Germany, Italy, Spain",
                "+2" => "(GMT +2:00) Greece, Israel, Turkey, Zambia",
                "+3" => "(GMT +3:00) Iraq, Kenya, Russia (Moscow)",
                "+4" => "(GMT +4:00) Azerbaijan, Afghanistan, Russia (Izhevsk)",
                "+5" => "(GMT +5:00) Pakistan, Uzbekistan",
                "+5.5" => "(GMT +5:30) India, Sri Lanka",
                "+6" => "(GMT +6:00) Bangladesh, Bhutan",
                "+6.5" => "(GMT +6:30) Burma, Cocos",
                "+7" => "(GMT +7:00) Thailand, Vietnam",
                "+8" => "(GMT +8:00) China, Malaysia, Taiwan, Australia",
                "+9" => "(GMT +9:00) Japan, Korea, Indonesia",
                "+9.5" => "(GMT +9:30) Australia",
                "+10" => "(GMT +10:00) Australia, Guam, Micronesia",
                "+11" => "(GMT +11:00) Solomon Islands, Vanuatu",
                "+12" => "(GMT +12:00) New Zealand, Fiji, Nauru",
                "+13" => "(GMT +13:00) Tonga"
            ]
        ],
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'Meta.title',
        'title' => 'Default site title',
        'default' => 'My Site',
    ],
    [
        'plugin' => 'RearEngine',
        'key' => 'App.admin.theme',
        'cell' => 'RearEngine.Theme',
        'default' => 'RearEngine',
        'editable' => false,
    ],
];