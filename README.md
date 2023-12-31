# Responsinator

A simple laravel project to Mock API for rapid front-end development!\
Generate PUT, POST, PUT, PATCH and DELETE requests and use them as real as a server response.



## [Demo and usage](https://responsinator.majid-gholamheidari.ir/)

## Features

- **No Limit In Response**: generate any response with no limitation in body or headers.
- **Any Type Of Response**: Mock your APIs with GET, POST, PUT, PATCH and DELETE requests.
- **Delay Simulation**: Simulate network delays to test how your system handles timeouts and latency.
- **Customizable Headers**: Customize response header based on your needs.
- **Set Your Status Code**: Set any status code you want for your response.
- **Save With More Description**: Save responses with title and description.

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

I hope can add more useful features to this repository in the future, such as artificial intelligence, but in this way, please make me happy with your support ⭐ .
