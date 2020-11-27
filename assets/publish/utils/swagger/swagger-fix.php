<?php

/**
 * If your environment url root is in another path
 */
if (getenv('APP_BRANCH') && !is_null(getenv('APP_BRANCH'))) {
    
    switch (mb_strtolower(getenv('APP_BRANCH'))) {
        
        case 'dev':
            $serverUrl = '/dev';
            break;

        case 'hmg':
            $serverUrl = '/hmg';
            break;

        case 'prod':
            $serverUrl = '/';
            break;

        default: 
            $serverUrl = '/';

    }

} else {
    $serverUrl = '';
}

$servers = '
servers:
    - url: "' . $serverUrl . '"
';

file_put_contents(dirname(dirname((__DIR__))) . '/public/openapi.yaml', $servers, FILE_APPEND);

?>
