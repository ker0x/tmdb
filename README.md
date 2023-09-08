<div align="center">
    <a href="https://github.com/ker0x/tmdb/actions" title="Build">
        <img src="https://img.shields.io/github/workflow/status/ker0x/tmdb/ci?style=for-the-badge" alt="Build">
    </a>
    <a href="https://codecov.io/gh/ker0x/tmdb/" title="Coverage">
        <img src="https://img.shields.io/codecov/c/gh/ker0x/tmdb?style=for-the-badge" alt="Coverage">
    </a>
    <a href="https://php.net" title="PHP Version">
        <img src="https://img.shields.io/badge/php-%3E%3D%208.1-8892BF.svg?style=for-the-badge" alt="PHP Version">
    </a>
    <a href="https://packagist.org/packages/kerox/tmdb" title="Downloads">
        <img src="https://img.shields.io/packagist/dt/kerox/tmdb.svg?style=for-the-badge" alt="Downloads">
    </a>
    <a href="https://packagist.org/packages/kerox/tmdb" title="Latest Stable Version">
        <img src="https://img.shields.io/packagist/v/kerox/tmdb.svg?style=for-the-badge" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/kerox/tmdb" title="License">
        <img src="https://img.shields.io/packagist/l/kerox/tmdb.svg?style=for-the-badge" alt="License">
    </a>
</div>

# TMDb

A tiny PHP Library to use [TMDb API](https://developers.themoviedb.org/3/getting-started/introduction)

## Warning

This library use [PSR-18 HTTP Client](https://www.php-fig.org/psr/psr-18/) interface, which means that **no** HTTP Client, like [Guzzle](https://github.com/guzzle/guzzle) or [httplug](https://github.com/php-http/httplug), are provided within. You will need to require them separately.

## Installation

You can install TMDb using Composer:

```
composer require kerox/tmdb
```

## Usage

Please, refer to the [wiki](https://github.com/ker0x/tmdb/wiki) to learn how to use this library
