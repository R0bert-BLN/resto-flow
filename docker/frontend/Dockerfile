FROM node:22-alpine

ARG USER=app
ARG UID=1000
ARG GID=1000

RUN apk add --no-cache libc6-compat shadow

RUN groupadd -g $GID $USER || true \
    && useradd -u $UID -g $GID -m -s /bin/bash $USER || true

ENV NODE_ENV=development
WORKDIR /app

RUN chown -R $USER:$USER /app

USER $USER

EXPOSE 5173

CMD sh -c "npm install && npm run dev -- --host"
