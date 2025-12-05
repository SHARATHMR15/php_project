# Use official PHP + Apache image
FROM php:8.2-apache

# Copy project files to server directory
COPY . /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
