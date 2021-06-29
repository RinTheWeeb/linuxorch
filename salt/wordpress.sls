wordpress-apt:
  pkg.installed:
    - pkgs:
      - nginx
      - nginx-common
      - nginx-full
      - mariadb-server
      - mariadb-client
      - python3-mysqldb
      - python3-pip
      - php-fpm
      - php-mysql
    - skip_suggestions: true

wordpress_database:
  pip.installed:
    - name: mysql
  mysql_database.present:
    - name: wordpress
  mysql_user.present:
    - name: wordpress
    - password: password
  mysql_grants.present:
    - database: wordpress.*
    - grant: ALL PRIVILEGES
    - user: wordpress
    - host: 'localhost'

download_wordpress:
  cmd.run:
    - name: 'wget -q -O - http://wordpress.org/latest.tar.gz | tar zxf - '
    - cwd: /var/www
    - creates: /var/www/wordpress/index.php
    - runas: root

/var/www/wordpress/wp-config.php:
  file.managed:
    - source: salt://files/wp-config.php
    - user: www-data
    - group: www-data

/var/www/wordpress:
  file.directory:
    - user: www-data
    - group: www-data
    - dir_mode: 775
    - file_mode: 664
    - recurse:
      - user
      - group
      - mode

yeet_default_nginx_conf:
  file.absent:
    - name: /etc/nginx/sites-available/default

yeet_default_nginx_conf_two:
  file.absent:
    - name: /etc/nginx/sites-enabled/default

/etc/nginx/sites-available/wordpress.conf:
  file.managed:
    - source: salt://files/wordpress.conf
    - user: www-data
    - group: www-data
    - mode: 774

/etc/nginx/sites-enabled/wordpress.conf:
  file.symlink:
    - target: /etc/nginx/sites-available/wordpress.conf

nginx:
  service.running:
    - enable: True
    - reload: True
    - watch:
      - file: /etc/nginx/sites-enabled/wordpress.conf