FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Adjust permissions for the database file
RUN chmod 666 /var/www/html/WebApp/functions_database.php

# Install any additional PHP extensions if required
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 80
EXPOSE 8080

# Start Apache
CMD ["apache2-foreground"]
