FROM node:22-alpine

ENV NODE_ENV=development

RUN apk add --no-cache libc6-compat

WORKDIR /app

RUN chown -R node:node /app

USER node

EXPOSE 5173

CMD sh -c "npm install && npm run dev -- --host"
