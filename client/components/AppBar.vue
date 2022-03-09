<template>
    <v-hover v-slot="{ hover }">
        <v-app-bar flat absolute hide-on-scroll scroll-target="#scrolling-techniques-4" :class="hover ? 'white' : 'custom-bg-transparent'" prominent>
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12">
                    <v-row no-gutters justify="center" align="center">
                        <v-col cols="1">
                            <LocaleSwitcher />
                        </v-col>
                        <v-col cols="6 offset-2">
                            <h1 :class="hover ? 'black--text text-center' : 'white--text text-center'">Wired Beauty</h1>
                        </v-col>
                        <v-col cols="3">
                            <v-row no-gutters justify="end" align="center">
                                <span :class="hover ? 'black--text' : 'white--text'">{{ $t('Become a panelist') }}</span>
                                <v-icon :color="hover ? 'black' : 'white'">mdi-account</v-icon>
                            </v-row>
                        </v-col>
                    </v-row>
                </v-col>
                <v-col cols="12">
                    <v-row no-gutters justify="center" align="center">
                        <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                            <v-btn :color="hover ? 'black' : 'white'" text>{{ $t('What we do') }}</v-btn>
                        </NuxtLink>
                        <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                            <v-btn :color="hover ? 'black' : 'white'" text>{{ $t('Device & App') }}</v-btn>
                        </NuxtLink>
                        <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                            <v-btn :color="hover ? 'black' : 'white'" text>{{ $t('Who we are') }}</v-btn>
                        </NuxtLink>
                        <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                            <v-btn :color="hover ? 'black' : 'white'" text>{{ $t('Scientific validation') }}</v-btn>
                        </NuxtLink>
                        <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                            <v-btn :color="hover ? 'black' : 'white'" text>{{ $t('Studies & services') }}</v-btn>
                        </NuxtLink>
                    </v-row>
                </v-col>
            </v-row>
        </v-app-bar>
    </v-hover>
</template>

<style lang="scss" scoped>
@import '@/assets/variables.scss';
.custom-bg-color-one {
    background-color: $custom-one !important;
}
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
</style>

<i18n>
{
  "en": {
    "Become a panelist": "Become a panelist",
    "What we do": "What we do",
    "Device & App": "Device & App",
    "Who we are": "Who we are",
    "Scientific validation": "Scientific validation",
    "Studies & services": "Studies & services"
  },
  "fr": {
    "Become a panelist": "Devenez un testeur",
    "What we do": "Ce que nous faisons",
    "Device & App": "Device & App",
    "Who we are": "Qui sommes nous ?",
    "Scientific validation": "Validation scientifique",
    "Studies & services": "Études et services"
  }
}
</i18n>
