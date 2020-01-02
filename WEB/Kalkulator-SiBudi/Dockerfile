FROM node
MAINTAINER KEPO-JANCOK <bhrdn@retas.id>

RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

RUN npm install -g pm2 http url

COPY src /usr/src/app

EXPOSE 3000

CMD [ "pm2", "startup" ]
CMD [ "pm2", "stop", "app" ]
CMD [ "pm2", "start", "server.js", "--name", "app", "--no-daemon" ]
