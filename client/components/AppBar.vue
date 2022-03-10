<template>
    <div>
        <v-hover v-slot="{ hover }">
            <v-app-bar
                flat
                absolute
                hide-on-scroll
                :class="hover ? 'white' : 'custom-bg-transparent'"
                class="d-none d-md-flex custom-app-bar"
                prominent
            >
                <v-row no-gutters>
                    <v-col cols="12">
                        <v-row no-gutters justify="space-between" align="center">
                            <v-col cols="4">
                                <v-menu offset-y>
                                    <template #activator="{ on, attrs }">
                                        <v-btn :color="hover ? 'black' : 'white'" text v-bind="attrs" v-on="on">
                                            {{ $i18n.locale }}
                                        </v-btn>
                                    </template>
                                    <v-list>
                                        <v-list-item v-for="(item, index) in allAvailableLocales" :key="index" @click="$i18n.locale = item.code">
                                            <v-list-item-title>{{ item.name }}</v-list-item-title>
                                        </v-list-item>
                                    </v-list>
                                </v-menu>
                            </v-col>
                            <v-col cols="4">
                                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                                    <v-img
                                        class="mb-1 my-auto"
                                        :class="hover ? 'd-none' : ''"
                                        height="80"
                                        contain
                                        :src="require(`~/assets/images/logo_white.png`)"
                                    ></v-img>
                                    <v-img
                                        class="mb-1 my-auto"
                                        :class="hover ? '' : 'd-none'"
                                        height="80"
                                        contain
                                        :src="require(`~/assets/images/logo_black.png`)"
                                    ></v-img>
                                </NuxtLink>
                            </v-col>
                            <v-col cols="4">
                                <v-row no-gutters justify="end" align="center">
                                    <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/become_panelist">
                                        <v-btn rounded :color="hover ? 'black' : 'white'" text>{{ $t('Become a panelist') }}</v-btn>
                                    </NuxtLink>
                                    <div>
                                        <v-btn
                                            :class="hover ? 'custom-link-hovered' : 'custom-link'"
                                            rounded
                                            :color="hover ? 'black' : 'white'"
                                            text
                                            @click.stop="secondDrawer = !secondDrawer"
                                        >
                                            <span>{{ $t('Login') }}</span>
                                        </v-btn>
                                    </div>
                                </v-row>
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col cols="12">
                        <v-row no-gutters justify="center" align="center">
                            <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/device_and_app">
                                <v-btn tile class="custom-app-bar-button" :color="hover ? 'black' : 'white'" text>{{ $t('Device & App') }}</v-btn>
                            </NuxtLink>
                            <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/who_are_we">
                                <v-btn tile class="custom-app-bar-button" :color="hover ? 'black' : 'white'" text>{{ $t('Who we are') }}</v-btn>
                            </NuxtLink>
                            <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/scientific_validation">
                                <v-btn tile class="custom-app-bar-button" :color="hover ? 'black' : 'white'" text>{{
                                    $t('Scientific validation')
                                }}</v-btn>
                            </NuxtLink>
                            <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/studies_and_services">
                                <v-btn tile class="custom-app-bar-button" :color="hover ? 'black' : 'white'" text>{{
                                    $t('Studies & services')
                                }}</v-btn>
                            </NuxtLink>
                            <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/blog">
                              <v-btn tile class="custom-app-bar-button" :color="hover ? 'black' : 'white'" text>Blog</v-btn>
                            </NuxtLink>
                        </v-row>
                    </v-col>
                </v-row>
            </v-app-bar>
        </v-hover>
        <v-icon style="position: absolute; top: 20px; left: 20px; z-index: 6" color="white" class="d-flex d-md-none" size="60" @click="drawer = true"
            >mdi-menu</v-icon
        >
        <!-- Mobile app bar -->
        <v-navigation-drawer v-model="drawer" temporary fixed>
            <v-list nav dense>
                <v-list-item>
                    <NuxtLink class="custom-link" to="/device_and_app">
                        <v-btn tile class="custom-app-bar-button" text>{{ $t('Device & App') }}</v-btn>
                    </NuxtLink>
                </v-list-item>
                <v-list-item>
                    <NuxtLink class="custom-link" to="/who_are_we">
                        <v-btn tile class="custom-app-bar-button" text>{{ $t('Who we are') }}</v-btn>
                    </NuxtLink>
                </v-list-item>
                <v-list-item>
                    <NuxtLink class="custom-link" to="/scientific_validation">
                        <v-btn tile class="custom-app-bar-button" text>{{ $t('Scientific validation') }}</v-btn>
                    </NuxtLink>
                </v-list-item>
                <v-list-item>
                    <NuxtLink class="custom-link" to="/studies_and_services">
                        <v-btn tile class="custom-app-bar-button" text>{{ $t('Studies & services') }}</v-btn>
                    </NuxtLink>
                </v-list-item>
                <v-list-item>
                    <NuxtLink class="custom-link" to="/become_panelist">
                        <v-btn tile class="custom-app-bar-button" text>{{ $t('Become a panelist') }}</v-btn>
                    </NuxtLink>
                </v-list-item>
                <v-list-item>
                    <NuxtLink class="custom-link" to="/auth/login">
                        <v-btn tile class="custom-app-bar-button" text>{{ $t('Login') }}</v-btn>
                    </NuxtLink>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-navigation-drawer v-model="secondDrawer" floating class="custom-right-nav-drawer" width="500" clipped app right hide-overlay temporary>
            <v-row no-gutters align="center" justify="space-between">
                <v-col cols="8 offset-1">
                    <p class="mt-3 text-h4 font-weight-bold">{{ $t('Access your account') }}</p>
                </v-col>
                <v-col cols="2">
                    <v-btn icon @click="secondDrawer = !secondDrawer">
                        <v-icon>mdi-close</v-icon>
                    </v-btn>
                </v-col>
            </v-row>
            <v-divider></v-divider>
            <v-row no-gutters align="center" justify="center">
                <v-col cols="10">
                    <p class="mt-3 text-h5 font-weight-bold">{{ $t('My Wired Beauty account') }}</p>
                </v-col>
            </v-row>
            <v-row no-gutters align="center" justify="center">
                <v-col cols="10">
                    <LoginForm />
                </v-col>
            </v-row>
            <v-divider class="my-6"></v-divider>
            <v-row no-gutters justify="center">
                <v-col cols="10">
                    <p class="my-1 text-h5 font-weight-bold">{{ $t('New to us?') }}</p>
                    <p>{{ $t('Create your WB space to have access to personalized information') }}</p>
                    <v-hover v-slot="{ hover }">
                        <v-btn block :loading="loading" :color="hover ? 'white' : 'black'" class="mr-4" @click="submit">
                            <span :class="hover ? 'black--text' : 'white--text'">{{ $t('Create your account now') }}</span>
                        </v-btn>
                    </v-hover>
                </v-col>
            </v-row>
        </v-navigation-drawer>
    </div>
</template>

<script>
export default {
    data() {
        return {
            drawer: null,
            secondDrawer: null,
        };
    },
    computed: {
        availableLocales() {
            return this.$i18n.locales.filter((i) => i.code !== this.$i18n.locale);
        },
        allAvailableLocales() {
            return this.$i18n.locales.filter((i) => i.code);
        },
    },
};
</script>

<style lang="scss" scoped>
@import '@/assets/variables.scss';
.custom-bg-transparent {
    background-color: transparent !important;
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
.custom-app-bar {
    height: $app-bar-height;
}
.custom-app-bar-button:hover {
    border-bottom: solid;
    border-bottom-width: 2px;
}
.custom-right-nav-drawer {
    border-left: solid lightgray !important;
    border-width: 1px !important;
}
</style>

<i18n>
{
  "en": {
    "Become a panelist": "Become a panelist",
    "What we do": "What we do",
    "Device & App": "Device & App",
    "Who we are": "Who we are",
    "Scientific validation": "Scientific validation",
    "Studies & services": "Studies & services",
    "Login": "Login",
    "Access your account": "Access your account",
    "My Wired Beauty account": "My Wired Beauty account",
    "New to us?": "New to us?",
    "Create your WB space to have access to personalized information": "Create your WB space to have access to personalized information",
    "Create your account now": "Create your account now"
  },
  "fr": {
    "Become a panelist": "Devenez un testeur",
    "What we do": "Ce que nous faisons",
    "Device & App": "Device & App",
    "Who we are": "Qui sommes nous ?",
    "Scientific validation": "Validation scientifique",
    "Studies & services": "Études et services",
    "Login": "Se connecter",
    "Access your account": "Accédez à votre compte",
    "My Wired Beauty account": "Mon compte Wired Beauty",
    "New to us?": "Nouveau chez nous ?",
    "Create your WB space to have access to personalized information": "Créez votre espace WB pour avoir accès à des informations personnalisées",
    "Create your account now": "Créez votre compte dès maintenant"
  }
}
</i18n>
