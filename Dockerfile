FROM jasonyanhj/sail-8.1

COPY . /var/www/html
RUN composer install
RUN chmod -R 777 storage/

EXPOSE 8000

ENTRYPOINT ["start-container"]
