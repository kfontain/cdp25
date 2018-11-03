FROM php:7.2.11-apache
LABEL maintainer="Conduite de projet 2018, Groupe 2.5"
RUN docker-php-ext-install pdo pdo_mysql mysqli
