# syntax=docker/dockerfile:1
FROM php:7.4-apache
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip mysqli