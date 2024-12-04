FROM php:8.4-fpm-alpine3.20

# Timezone
ENV TZ="Europe/Paris"

# Install Bash, openssh
RUN apk update && apk upgrade \
    && apk add --no-cache bash openssh git


# Bash
COPY ./.docker/php/.bashrc /root/.bashrc
COPY ./.docker/php/.bash_profile /root/.bash_profile

COPY ./.docker/php/docker-entrypoint.sh /
RUN chmod a+x /docker-entrypoint.sh

WORKDIR /app

ENTRYPOINT [ "/docker-entrypoint.sh" ]

