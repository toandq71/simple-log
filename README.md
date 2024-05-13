# Simple Logs

[`PHP v8.2`](https://php.net)

[`Laravel v11.x`](https://github.com/laravel/laravel)

## Installation

```bash
composer require toandq71/simple-log
```

Run the command:

```bash
php artisan histories:install
```

```bash
php artisan migrate
```

## Usage

```php
use toandq71\SimpleLog\Interface\LogHistoryInterface;

// Coding in file controller
public function testLog(Request $request)
{
    $log = app()->get(LogHistoryInterface::class);
    
    // Save log
    $log->saveHistory([
        'action' => 'created_user',
        'created_by' => 1
    ]);
}
```
