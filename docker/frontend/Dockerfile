FROM node:22-alpine

RUN apk add --no-cache libc6-compat

ENV NEXT_TELEMETRY_DISABLED=1

WORKDIR /app

COPY frontend/package.json frontend/package-lock.json* ./

RUN npm install

CMD ["npm", "run", "dev"]
