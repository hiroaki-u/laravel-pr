FROM mysql:8.0

ENV MYSQL_DATABASE=test_db \
  MYSQL_USER=test_user \
  MYSQL_PASSWORD=test_pass \
  MYSQL_ROOT_PASSWORD=test_root_pass \
  TZ=Asia/Tokyo

COPY ./docker/mysql/my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf