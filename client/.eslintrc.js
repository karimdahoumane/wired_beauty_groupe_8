module.exports = {
    root: true,
    env: {
        browser: true,
        node: true,
    },
    parserOptions: {
        parser: '@babel/eslint-parser',
        requireConfigFile: false,
    },
    extends: [
        '@nuxtjs',
        'plugin:nuxt/recommended',
        'plugin:vue/essential',
        'eslint:recommended',
        'plugin:prettier/recommended',
        // 'prettier',
    ],
    plugins: [],
    // add your custom rules here
    rules: {
        'prettier/prettier': [
            'error',
            {
                endOfLine: 'auto',
            },
        ],
    },
};
