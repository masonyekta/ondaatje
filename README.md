# Ondaatje

[![CircleCI](https://dl.circleci.com/status-badge/img/gh/masonyekta/ondaatje/tree/main.svg?style=shield)](https://dl.circleci.com/status-badge/redirect/gh/masonyekta/ondaatje/tree/main)

A WordPress block theme for bloggers and writers.

![Preview](https://i.imgur.com/Vqd1rtV.jpg)

## About Michael Ondaatje

This theme is named after Michael Ondaatje, a Sri Lankan-Canadian writer best known for his lyrical and evocative prose. He is a master of blending fact and fiction to create rich, multi-layered narratives that delve into the complexities of identity, memory, and love.

## Requirements

-   Gutenberg plugin (latest)
-   WordPress 6.0+
-   PHP 5.6+
-   License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

## Getting Started

You can download the latest stable release of Ondaatje using the release section. Alternatively, install the entire repository for development purposes.

## Coding Standards

Ondaatje adheres to the [WordPress coding standards](https://developer.wordpress.org/coding-standards/). To optionally test standards locally, you will need [Composer](https://getcomposer.org/) on your machine. Run `composer install` to install test-specific development dependencies. The following commands are available:

-   `composer run lint` Checks all PHP files for syntax errors
-   `composer run standards:check` Checks all PHP files for standards errors
-   `composer run standards:fix` Attempts to automatically fix all PHP standards errors
