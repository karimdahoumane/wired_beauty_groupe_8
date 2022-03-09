module.exports = ({ env }) => ({
  defaultConnection: 'default',
  connections: {
    default: {
      connector: 'bookshelf',
      settings: {
        client: 'postgres',
        host: env('DATABASE_HOST', 'db'),
        port: env.int('DATABASE_PORT', 5432),
        database: env('DATABASE_NAME', 'wiredbeauty'),
        username: env('DATABASE_USERNAME', ''),
        password: env('DATABASE_PASSWORD', 'wiredbeauty'),
        ssl: env.bool('DATABASE_SSL', false),
      },
      options: {}
    },
  },
});
