<template>
    <v-container fluid class="base-container pa-0">
        <v-container fluid class="black pa-0 navbar-bg"></v-container>
        <v-row no-gutters justify="center">
            <v-col cols="8" class="blog-container">
                <h2 class="text-h2 blog-title">BLOG</h2>
                <p v-if="!articles || articles.length === 0">No articles were found.</p>
                <v-card v-else>
                    <v-list-item v-for="(article, index) in articles" :key="index" two-line>
                        <v-list-item-content>
                            <v-list-item-title>{{ article.Title }}</v-list-item-title>
                            <v-list-item-subtitle class="article-subtitle">{{ article.Content }}</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: 'IndexBlogPage',
    data() {
        return {
            articles: [],
        };
    },

    async mounted() {
        this.articles = await this.$strapi.find('articles');
    },
};
</script>

<style lang="scss" scoped>
@import '@/assets/variables.scss';
.blog-container {
    margin-top: 1rem;
}
.navbar-bg {
    height: $app-bar-height;
}
.base-container {
    background-color: white;
}
.article-subtitle {
    white-space: normal;
}

.blog-title {
    margin-bottom: 1rem;
    font-weight: bold;
}
</style>
