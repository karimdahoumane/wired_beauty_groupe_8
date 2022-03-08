<template>
    <v-hover
        v-slot="{ hover }"
    >
        <v-app-bar
            flat
            absolute
            hide-on-scroll
            :class="hover ? 'white' : 'custom-bg-transparent'"
            class="custom-app-bar"
            prominent
        >

        <v-row no-gutters justify="center" align="center">
            <v-col cols="12">
                <v-row no-gutters justify="center" align="center">
                    <v-col cols="1">
                        <LocaleSwitcher :hover="hover" />
                    </v-col>
                    <v-col cols="6 offset-2">
                        <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                            <h1 :class="hover ? 'black--text text-center' : 'white--text text-center'">Wired Beauty</h1>
                        </NuxtLink>
                    </v-col>
                    <v-col cols="3">
                        <v-row no-gutters justify="end" align="center">
                            <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/become_panelist">
                                <v-btn :color="hover? 'black' : 'white'" text>{{ $t('Become a panelist') }}</v-btn>
                            </NuxtLink>
                            <v-btn icon>
                                <v-icon :color="hover ? 'black' : 'white'">mdi-account</v-icon>
                            </v-btn>
                        </v-row>
                    </v-col>
                </v-row>
            </v-col>
            <v-col cols="12">
                <v-row no-gutters justify="center" align="center">
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/what_we_do">
                    <v-btn :color="hover? 'black' : 'white'" text>{{ $t('What we do') }}</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/device_and_app">
                    <v-btn :color="hover? 'black' : 'white'" text>{{ $t('Device & App') }}</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/who_are_we">
                    <v-btn :color="hover? 'black' : 'white'" text>{{ $t('Who we are') }}</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/scientific_validation">
                    <v-btn :color="hover? 'black' : 'white'" text>{{ $t('Scientific validation') }}</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/studies_and_services">
                    <v-btn :color="hover? 'black' : 'white'" text>{{ $t('Studies & services') }}</v-btn>
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
  .custom-link:link, .custom-link:visited {
      text-decoration: none;
      color: white;
  }
  .custom-link-hovered:link, .custom-link-hovered:visited {
      text-decoration: none;
      color: black;
  }
.custom-app-bar {
    height: $app-bar-height;
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