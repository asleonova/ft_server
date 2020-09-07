# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dbliss <dbliss@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/01 18:48:01 by dbliss            #+#    #+#              #
#    Updated: 2020/09/07 15:19:19 by dbliss           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# Import OS image
FROM debian: buster

# Creating working directory to run commands there
WORKDIR /srcs

# Expose ports
EXPOSE		80 443

# Update and upgrade packages
RUN			apt-get update && apt-get -y upgrade

# Install additional packages
RUN			apt-get -y install nginx \
			default-mysql-server \
			wordpress \
			vim \
			mc \

# Install php packages
RUN			apt-get -y install php php-fpm php-mysql \
			php-mbstring php-gd php-cli \
			php7.3-gmp php7.3-curl php7.3-intl php7.3-xmlrpc php7.3-xml php7.3-zip php7.3-common

# Configure phpmyadmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz \
	phpmyadmin.tar.gz	
RUN tar -xf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin

# Configure wordpress
RUN			cp -r /usr/share/wordpress /var/www/html/ && rm /var/www/html/wordpress/wp-config.php
RUN			chown -R www-data:www-data /var/www/html
COPY		/srcs/wp-config.php /var/www/html/wordpress/

# Configure nginx
COPY		/srcs/localhost.conf /etc/nginx/sites-available/

RUN			ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled/localhost.conf && \
			rm /etc/nginx/sites-enabled/default && rm /etc/nginx/sites-available/default
# To delete default index.html page
RUN			rm /var/www/html/index.html

COPY		/srcs/base.sql /srcs/start_server.sh /srcs/index.sh ./

# SSL certificate
RUN			openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-keyout /etc/ssl/private/localhost.key \
			-out /etc/ssl/certs/localhost.crt \
			-subj "/C=RU/ST=Moscow/L=Moscow/O=42/OU=21MOSCOW/CN=DeanBliss"

RUN			chmod 755 start_server.sh

CMD			["bash", "start_server.sh"]