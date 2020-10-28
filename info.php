<?php
require_once __DIR__ . '/vendor/autoload.php';

// Load all configuration options
/** @var array $config */
$config = require __DIR__ . '/config.php';

try { 
    $telegram = new Longman\TelegramBot\Telegram($config['api_key'], $config['bot_username']);
    $result = $telegram->getVersion();
    echo $result;
    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Log telegram errors
    Longman\TelegramBot\TelegramLog::error($e);

    // Uncomment this to output any errors (ONLY FOR DEVELOPMENT!)
    // echo $e;
} catch (Longman\TelegramBot\Exception\TelegramLogException $e) {
    // Uncomment this to output log initialisation errors (ONLY FOR DEVELOPMENT!)
    // echo $e;
}
