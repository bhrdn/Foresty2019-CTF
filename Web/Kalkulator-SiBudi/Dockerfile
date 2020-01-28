FROM node
MAINTAINER KEPO-JANCOK <bhrdn@retas.id>

RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

RUN printf "Foresty2019{68b329da9893e34099c7d8ad5cb9c940}" > flag.txt
RUN npm install -g pm2 http url

COPY src /usr/src/app

EXPOSE 3000

CMD [ "pm2", "startup" ]
CMD [ "pm2", "stop", "app" ]
CMD [ "pm2", "start", "server.js", "--name", "app", "--no-daemon" ]
