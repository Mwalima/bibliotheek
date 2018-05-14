FROM php:7.1.3-fpm

MAINTAINER Mwalima Peltenburg <m.peltenburg@hotmail.com>

# Enable systemd
ENV container docker

RUN (cd /lib/systemd/system/sysinit.target.wants/; for i in *; do [ $i == systemd-tmpfiles-setup.service ] || rm -f $i; done); \
rm -f /lib/systemd/system/multi-user.target.wants/*;\
rm -f /etc/systemd/system/*.wants/*;\
rm -f /lib/systemd/system/local-fs.target.wants/*; \
rm -f /lib/systemd/system/sockets.target.wants/*udev*; \
rm -f /lib/systemd/system/sockets.target.wants/*initctl*; \
rm -f /lib/systemd/system/basic.target.wants/*;\
rm -f /lib/systemd/system/anaconda.target.wants/*;

VOLUME [ "/sys/fs/cgroup" ]

CMD ["/usr/sbin/init"]

# EPEL Repository
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

# Default installation
RUN yum -y groupinstall "Development Tools"
RUN yum -y update && \
    yum -y --setopt=tsflags=nodocs install \
    cronie \
    curl \
    less \
    nano \
    openssl \
    wget bzip2-devel \
    unzip

# Install Apache 2.4
RUN yum -y install httpd mod_ssl
RUN systemctl enable httpd

# Create user id 1000
RUN groupadd -r www-data && useradd -r -u 1000 --create-home -g www-data www-data

# Install PHP 5.6
RUN yum -y install php56w php56w-common php56w-cli

# Install PHP 5.6 extensions
#RUN yum -y install php56w-mbstring php56w-curl php56w-ldap php56w-xml \
#                   php56w-gd php56w-intl php56w-mcrypt php56w-devel \
#                   php56w-pear php56w-pecl-apcu php56w-pecl-xdebug \
#                   php56w-mysql php56w-mssql php56w-pdo php56w-odbc php56w-soap

# Install Node.js & NPM
RUN yum -y install nodejs npm
RUN npm rebuild node-sass

# Remove packages
RUN rm -rf /var/cache/yum/* \
    yum clean all

# Install composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Copy Httpd configurations
COPY etc/httpd.conf /etc/httpd/conf/httpd.conf
COPY etc/vhost.conf /etc/httpd/vhosts/docker.conf
COPY ssl/localhost.crt /etc/httpd/ssl/localhost.crt
COPY ssl/localhost.pub /etc/httpd/ssl/localhost.pub

# Copy Freetds configurations
COPY etc/freetds.conf /etc/freetds.conf

# Copy PHP configurations
COPY etc/php.ini /etc/php.ini
COPY etc/xdebug.ini /etc/php.d/xdebug.ini

WORKDIR /var/www/html
