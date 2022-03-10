<template>
    <v-app>
        <AppBar />
        <v-main>
            <v-container class="pa-0" fluid>
                <Nuxt />
            </v-container>
        </v-main>
        <v-footer>
            <span>&copy; {{ new Date().getFullYear() }}</span>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    name: 'DefaultLayout',
    data() {
        return {};
    },
};
</script>

<style>
#app {
    background-color: white;
}
.custom-link:link,
.custom-link:visited {
    text-decoration: none;
    color: white;
}
.custom-link-hovered:link,
.custom-link-hovered:visited {
    text-decoration: none;
    color: black;
}
</style>
