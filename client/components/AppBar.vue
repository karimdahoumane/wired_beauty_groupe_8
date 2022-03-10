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
                                    <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/auth/login">
                                        <v-btn rounded :color="hover ? 'black' : 'white'" text>{{ $t('Login') }}</v-btn>
                                    </NuxtLink>
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            drawer: null,
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
    "Login": "Login"
  },
  "fr": {
    "Become a panelist": "Devenez un testeur",
    "What we do": "Ce que nous faisons",
    "Device & App": "Device & App",
    "Who we are": "Qui sommes nous ?",
    "Scientific validation": "Validation scientifique",
    "Studies & services": "Études et services",
    "Login": "Se connecter"
  }
}
</i18n>
