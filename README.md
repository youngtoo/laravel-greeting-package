# Laravel Greeting Package

## Description

The Laravel Greeting package is a lightweight, customizable package that provides personalized greeting messages based on the time of the day. It automatically detects the current time and delivers and appropriate greeting in either English of Kiswahili. If a user is logged in, the greeting is personalized with their first name or email.

## Features

1. Time based greetings
2. User personalization
3. Multilanguage support
4. Artisan Command
5. Easy Integration

## Use Cases

- Display personalized greetings on dashboards or welcome pages
- Enhance user experience by acknowledging the time of the day
- Support multilingual applocations

## Installation

1. **Install the Package:**

   - Add the package to your Laravel project using Composer:

     ```bash
     composer require iantoo/greeting-package
     ```


   - If you are developing the package locally, include it in your `composer.json` file under the `repositories` section:

     ```json
     "repositories": [
         {
             "type": "path",
             "url": "../path-to-your-package"
         }
     ],
     "require": {
         "iantoo/greeting-package": "*"
     }
     ```

   - Then run:

     ```bash
     composer update
     ```


## Configuration

1. **Publish Configuration (Optional):**

   - Publish the package's configuration file to your application's `config` directory:

     ```bash
     php artisan vendor:publish --tag=config
     ```


2. **Publish Language Files (Optional):**

   - Publish the package's language files to your application's `resources/lang` directory:

     ```bash
     php artisan vendor:publish --tag=lang
     ```


3. **Set the Application Locale (Optional):**

   - To use Kiswahili for greetings, set the application's locale to `sw` in your `.env` file or `config/app.php`:

     ```php
     'locale' => 'sw',
     ```


## Usage

1. **Display a Greeting in a View:**

   - Use the `Greeting::greet()` method to display a greeting message in any Blade view:
     
     ```blade
     {{ \Iantoo\GreetingPackage\Greeting::greet() }}
     ```


2. **Test the Greeting via Artisan Command:**

   - Run the custom Artisan command to test the greeting output:
     ```bash
     php artisan greet:user
     ```
   - This command will output a greeting message in the console based on the current time and the logged-in user's status.

## Example Usage: Greetings

### In a Controller:



```php
namespace App\Http\Controllers;

use Iantoo\GreetingPackage\Greeting;

class DashboardController extends Controller
{
    public function index()
    {
        $greeting = Greeting::greet();

        return view('dashboard', compact('greeting'));
    }
}
```


### In a Blade View:



```blade
<!-- resources/views/dashboard.blade.php -->
<h1>{{ $greeting }}</h1>
```

---

## Example Usage: Current Date

To display the current date using the `currentDate()` method from the Laravel Greeting Package, follow these steps:

### Usage Example

#### 1. **Using in a Blade View**

If you want to display the current date in a Blade view, you can call the `currentDate()` method directly in the view.

```blade
<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to Our Application</h1>
    <p>Today is {{ \Iantoo\GreetingPackage\Greeting::currentDate() }}</p>
</body>
</html>
```

**Output:**
```
Today is Monday, January 1, 2024
```

#### 2. **Using in a Controller**

You can also use the `currentDate()` method within a controller and pass the result to your view.

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iantoo\GreetingPackage\Greeting;

class HomeController extends Controller
{
    public function index()
    {
        $currentDate = Greeting::currentDate();

        return view('home', compact('currentDate'));
    }
}
```

And in your Blade view:

```blade
<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Our Application</h1>
    <p>Today is {{ $currentDate }}</p>
</body>
</html>
```

#### 3. **Using in an Artisan Command**

If you need to use the `currentDate()` method in a custom Artisan command, it can be easily integrated.

```php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Iantoo\GreetingPackage\Greeting;

class ShowCurrentDate extends Command
{
    protected $signature = 'date:show';
    protected $description = 'Display the current date';

    public function handle()
    {
        $this->info('Today is ' . Greeting::currentDate());
    }
}
```

To run the command:

```bash
php artisan date:show
```

**Output:**
```
Today is Monday, January 1, 2024
```

### Conclusion

By using the `currentDate()` method in your Blade views, controllers, or custom Artisan commands, you can easily display the current date in a formatted manner (including the day of the week, month, day in numbers, and year) within your Laravel application. This method is flexible and can be used wherever you need to display the date.

---


## Advanced Usage

1. **Customizing Greetings:**

   - Modify the published configuration or language files to customize the greeting messages.

2. **Adding More Languages:**

   - Add new language files in the `resources/lang` directory under the appropriate locale code to support additional languages.

## Deployment


- Deploy your Laravel application as usual. The package will automatically generate the appropriate greeting messages based on the user's language preference and time of day.
