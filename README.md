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

## Example Usage

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



## Advanced Usage

1. **Customizing Greetings:**

   - Modify the published configuration or language files to customize the greeting messages.

2. **Adding More Languages:**

   - Add new language files in the `resources/lang` directory under the appropriate locale code to support additional languages.

## Deployment


- Deploy your Laravel application as usual. The package will automatically generate the appropriate greeting messages based on the user's language preference and time of day.
