FROM node:16-alpine as node
FROM nginx:1.20-alpine

# node command
COPY --from=node /usr/local/bin /usr/local/bin
# npm command
COPY --from=node /usr/local/lib /usr/local/lib
# yarn command
COPY --from=node /opt /opt
# nginx config file
COPY ./docker/nginx/default.conf /etc/nginx/conf.d/

WORKDIR /work