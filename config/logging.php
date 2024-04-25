<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],

        //====================LOG E-COMMERCE========================
        'user_activity' => [
            'driver' => 'daily',
            'path' => storage_path('logs/user_activity/user_activity.log'),
            'level' => 'info',
            'days' => 1,
            //'tap' => [App\Logging\CustomizeFormatter::class],
            'maxsize' => 1024, // Ukuran maksimum file log (dalam kilobita)
            //'maxfiles' => 5, // Opsional: Jumlah file log yang akan dipertahankan
            'timezone' => 'Asia/Jakarta',
        ],

        'customer_retention' => [
            'driver' => 'daily',
            'path' => storage_path('logs/customer_retention/customer_retention.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'inventory' => [
            'driver' => 'daily',
            'path' => storage_path('logs/inventory/inventory.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'product_activity' => [
            'driver' => 'daily',
            'path' => storage_path('logs/product_activity/product_activity.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'discount_coupon' => [
            'driver' => 'daily',
            'path' => storage_path('logs/discount_coupon/discount_coupon.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'promotion_performance' => [
            'driver' => 'daily',
            'path' => storage_path('logs/promotion_performance/promotion_performance.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'shipping' => [
            'driver' => 'daily',
            'path' => storage_path('logs/shipping/shipping.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'transaction' => [
            'driver' => 'daily',
            'path' => storage_path('logs/transactions/transactions.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'payment' => [
            'driver' => 'daily',
            'path' => storage_path('logs/payment/payment.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'customer_service' => [
            'driver' => 'daily',
            'path' => storage_path('logs/customer_service/customer_service.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'security' => [
            'driver' => 'daily',
            'path' => storage_path('logs/security/security.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'performance' => [
            'driver' => 'daily',
            'path' => storage_path('logs/performance/performance.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'analytics' => [
            'driver' => 'daily',
            'path' => storage_path('logs/analytics/analytics.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],

        'third_party_integration' => [
            'driver' => 'daily',
            'path' => storage_path('logs/third_party_integration/third_party_integration.log'),
            'level' => 'info',
            'days' => 30,
            'timezone' => 'Asia/Jakarta',
        ],
    ],

];
