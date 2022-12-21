FROM nginx:1.23.3-alpine

WORKDIR /usr/share/nginx/html

COPY ./docker/nginx_conf/default.conf /etc/nginx/conf.d/default.conf

COPY . .

RUN rm -r docker