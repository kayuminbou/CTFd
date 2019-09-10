FROM centos:6.6
WORKDIR /usr/src
RUN yum install -y \
        gcc \
        php \
        php-devel \
        php-mysql \
        php-pear 

RUN echo 'DirectoryIndex index.html index.html.var index.php index.cgi' >> /etc/httpd/conf/httpd.conf

RUN useradd -c ctfgate{c4n_y0u_7r4v3r53?} flag

COPY ./pages /var/www/html

EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]