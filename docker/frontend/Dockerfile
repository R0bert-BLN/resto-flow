FROM node:25-alpine

RUN apk add --no-cache libc6-compat

ENV NODE_ENV=development

WORKDIR /app

EXPOSE 5173

CMD sh -c "npm install && npm run dev -- --host"
