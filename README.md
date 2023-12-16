# Responsinator

A simple laravel project to mock your REST APIs !

[Demo and usage](https://responsinator.majid-gholamheidari.ir/)

## Overview

With this open source project you can have your own server to create any API response.
Develop your app and don't worry about API responses.

- Make any response in different methods
``` GET, POST, PUT, PATCH, DELETE ```
- Set your custom status code
- Have mode details privately
- Customize headers according to your needs


## Installation

### Clone the project
```bash
git clone https://github.com/majid-gholamheidari/responsinator.git
```

### Go to the project directory
```bash
cd responsinator
```

### Update .env file
edit the following items according to your needs
- DB_DATABASE=responsinator
- DB_USERNAME=root
- DB_PASSWORD=

### Install dependencies
```bash
  composer install
```

### Generate Laravel Application KEY
```bash
  php artisan key:generate
```
### Tables and fake data
```bash
  php artisan migrate
```

#### And at the end, start the app
```bash
  php artisan serve
```

I hope can add more useful features to this repository in the future, such as artificial intelligence, but in this way, please accompany me.
