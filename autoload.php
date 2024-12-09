<?php

spl_autoload_register(function ($class) {
    // Base directory where all libraries are stored
    $baseDir = __DIR__ . '/assets/vendor/';

    // Replace namespace separators with directory separators
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    // Define a closure for recursive inclusion
    $recursiveInclude = function ($directory) use ($classPath, &$recursiveInclude) {
        foreach (scandir($directory) as $file) {
            if ($file === '.' || $file === '..') {
                continue; // Skip current and parent directory links
            }

            $path = $directory . DIRECTORY_SEPARATOR . $file;

            if (is_dir($path)) {
                // Recursively scan subdirectories
                $recursiveInclude($path);
            } elseif (is_file($path) && basename($path) === basename($classPath)) {
                require_once $path; // Include the matching file
                return;
            }
        }
    };

    // Start recursive inclusion from the base directory
    $recursiveInclude($baseDir);
});


// Incluez manuellement les fichiers non conformes au PSR-4
require_once __DIR__ . '/assets/vendor/Result-Type/src/Success.php';
require_once __DIR__ . '/assets/vendor/Result-Type/src/Error.php';
require_once __DIR__ . '/assets/vendor/php-option/src/PhpOption/Some.php';
require_once __DIR__ . '/assets/vendor/php-option/src/PhpOption/Option.php';
require_once __DIR__ . '/assets/vendor/php-option/src/PhpOption/None.php';
require_once __DIR__ . '/assets/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/assets/vendor/phpmailer/src/SMTP.php';
require_once __DIR__ . '/assets/vendor/phpdotenv/src/Dotenv.php';
