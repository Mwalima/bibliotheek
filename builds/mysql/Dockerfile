FROM mysql:5.7.13

MAINTAINER Mwalima Peltenburg <m.peltenburg@hotmail.com>

RUN apt-get update
RUN apt-get install less nano

# Sql mode switcher
COPY scripts/enable_sql_mode /usr/local/bin/enable_sql_mode
COPY scripts/disable_sql_mode /usr/local/bin/disable_sql_mode
RUN chmod +x /usr/local/bin/enable_sql_mode
RUN chmod +x /usr/local/bin/disable_sql_mode
