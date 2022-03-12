<template>
    <v-app>
        <v-app-bar color="#000229" dark>
            <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>
            <v-toolbar-title>Client Dashboard</v-toolbar-title>
            <v-spacer></v-spacer>
            <NuxtLink class="custom-link" to="/auth/logout"><v-icon>mdi-logout</v-icon></NuxtLink>
        </v-app-bar>
        <v-navigation-drawer v-model="drawer" absolute temporary>
            <v-list nav dense>
                <v-list-item-group v-model="group" active-class="deep-purple--text text--accent-4">
                  <NuxtLink class="nav-link" to="/admin">
                    <v-list-item>
                      <v-list-item-icon>
                        <v-icon>mdi-home</v-icon>
                      </v-list-item-icon>
                      <v-list-item-title>Home</v-list-item-title>
                    </v-list-item>
                  </NuxtLink>
                  <NuxtLink class="nav-link" to="/admin/upload">
                    <v-list-item>
                      <v-list-item-icon>
                        <v-icon>mdi-file-upload</v-icon>
                      </v-list-item-icon>
                      <v-list-item-title>Upload file</v-list-item-title>
                    </v-list-item>
                  </NuxtLink>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
        <v-main>
            <v-container fluid>
                <Nuxt />
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: 'AdminLayout',
    data: () => ({
        drawer: false,
        group: null,
    }),
};
</script>

<style>
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

.nav-link {
  text-decoration: none;
}
</style>
