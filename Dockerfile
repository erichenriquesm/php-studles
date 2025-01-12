# Use a imagem oficial do PHP com Apache
FROM php:8.2-fpm

# Copie o código para o diretório padrão do Apache
COPY src/ /var/www/

# Configure permissões e módulos
RUN chown -R www-data:www-data /var/www \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Copie um arquivo php.ini personalizado (opcional)
COPY php.ini /usr/local/etc/php/

CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www"]
