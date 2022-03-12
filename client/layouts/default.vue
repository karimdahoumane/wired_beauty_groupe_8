<template>
    <v-app>
        <AppBar />
        <v-main>
            <v-container class="pa-0" fluid>
                <Nuxt />
            </v-container>
            <CookieBanner />
        </v-main>

        <AppFooter />
    </v-app>
</template>

<script>
export default {
    name: 'DefaultLayout',
    data() {
        return {};
    },
    mounted() {
        const recaptchaScript = document.createElement('script');
        recaptchaScript.setAttribute('src', '//code.tidio.co/ixllqhey4hufqiqz94jgntnzk3oufgrr.js');
        document.head.appendChild(recaptchaScript);
    },
};
</script>

<style>
#app {
    background-color: white;
}
</style>
