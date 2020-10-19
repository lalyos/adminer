FROM adminer

ENV ADMINER_LOGIN_HOST=db
ENV ADMINER_LOGIN_USER=root
ENV ADMINER_LOGIN_PASSWORD=secret
ENV ADMINER_LOGIN_DATABASE=demo
ENV ADMINER_PLUGINS="sql-log dump-json"
ENV ADMINER_DESIGN=https://raw.githubusercontent.com/pepa-linha/Adminer-Design-Dark/master/adminer.css

ADD entrypoint.sh /usr/local/bin/
ADD index.php /var/www/html/
ADD plugins-enabled/oneclick-login.php /var/www/html/plugins-enabled/