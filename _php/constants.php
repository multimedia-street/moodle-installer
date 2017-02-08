<?php

define('MIN_PHP_VERSION', '5.6.5');
define('PATH_INSTALL', str_replace("\\", "/", realpath(dirname(__FILE__)."/../")));
define('PHP_PATH_INSTALL', realpath(dirname(__FILE__)));
define('DEBUG', array_key_exists('debug', $_REQUEST));
define('TIMEOUT_LIMIT', 3600);
define('MOODLE_VERSION', '3.2');
define('GMST_IMG_B64', 'data:image/jpeg;base64,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');

$urls = [
    [
        'destination' => '/moodle.zip',
        'unzip' => 0,
        'autodelete' => true,
        'url' => 'https://download.moodle.org/stable32/moodle-latest-32.zip',
        'message_before' => 'Downloading moodle 3.2 ....',
        'message_after' => 'Unpacking moodle ...',
    ],
    [
        'destination' => '/theme/adaptable.zip',
        'unzip' => null,
        'autodelete' => true,
        'url' => 'https://moodle.org/plugins/download.php/13040/theme_adaptable_moodle32_2017012300.zip',
        'message_before' => 'Downloading theme adaptable ....',
        'message_after' => 'Unpacking theme ...',
    ],
    [
        'destination' => '/question/type/ddmatch.zip',
        'unzip' => null,
        'autodelete' => true,
        'url' => 'https://moodle.org/plugins/download.php/10381/qtype_ddmatch_moodle30_2016012300.zip',
        'message_before' => 'Downloading drag and drop matching ....',
        'message_after' => 'Unpacking drag and drop matching ...',
    ],
    [
        'destination' => '/mod/questionnaire.zip',
        'unzip' => null,
        'autodelete' => true,
        'url' => 'https://moodle.org/plugins/download.php/13179/mod_questionnaire_moodle32_2016111102.zip',
        'message_before' => 'Downloading questionnaire ....',
        'message_after' => 'Unpacking questionnaire ...',
    ],
    [
        'destination' => '/mod/certificate.zip',
        'unzip' => null,
        'autodelete' => true,
        'url' => 'https://moodle.org/plugins/download.php/11632/mod_simplecertificate_moodle31_2016062231.zip',
        'message_before' => 'Downloading simple certificate ....',
        'message_after' => 'Unpacking simple certificate ...',
    ],
    [
        'destination' => '/mod/game.zip',
        'unzip' => null,
        'autodelete' => true,
        'url' => 'https://moodle.org/plugins/download.php/12237/mod_game_moodle31_2016091701.zip',
        'message_before' => 'Downloading game ....',
        'message_after' => 'Unpacking game ...',
    ],
    [
        'destination' => '/course/format/onetopic.zip',
        'unzip' => null,
        'autodelete' => true,
        'url' => 'https://moodle.org/plugins/download.php/11777/format_onetopic_moodle31_2016071400.zip',
        'message_before' => 'Downloading one topic format ....',
        'message_after' => 'Unpacking one topic format ...',
    ],
];
