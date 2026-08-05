<?php

// Vercel PHP entrypoint. Laravel remains the application kernel; Vercel only
// provides the serverless request adapter.
foreach (['SESSION_DRIVER' => 'cookie', 'CACHE_STORE' => 'array', 'LOG_CHANNEL' => 'stderr'] as $key => $value) {
    if (getenv($key) === false) {
        putenv($key.'='.$value);
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

require __DIR__ . '/../public/index.php';
