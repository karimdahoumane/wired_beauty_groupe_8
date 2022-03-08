FROM node:16-alpine

RUN apk add --no-cache bash curl && \
    curl -f https://get.pnpm.io/v6.14.js | node - add --global pnpm && \
    npx pnpm add pnpm
