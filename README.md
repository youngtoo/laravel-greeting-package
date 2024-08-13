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

Include the package in your laravel project, publish the configuration and start personalized greetings in minutes



### Publish the configuration file

To publish the configuration file:
`php artisan vendor:publish --tag=config`

Todo: Include the composer install command.

### Run the command

To run the command, use

`php artisan greet:user`