<template>
    <v-hover
        v-slot="{ hover }"
    >
        <v-app-bar
            flat
            absolute
            hide-on-scroll
            scroll-target="#scrolling-techniques-4"
            :class="hover ? 'white' : 'custom-bg-transparent'"
            prominent
        >

        <v-row no-gutters justify="center" align="center">
            <v-col cols="12">
                <v-row no-gutters justify="center" align="center">
                    <v-col cols="6 offset-3">
                        <h1 :class="hover ? 'black--text text-center' : 'white--text text-center'">Wired Beauty</h1>
                    </v-col>
                    <v-col cols="3">
                        <v-row no-gutters justify="end" align="center">
                            <span>Become a partner</span>
                            <v-icon :color="hover ? 'black' : 'white'">mdi-account</v-icon>
                        </v-row>
                    </v-col>
                </v-row>
            </v-col>
            <v-col cols="12">
                <v-row no-gutters justify="center" align="center">
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                    <v-btn :color="hover? 'black' : 'white'" text>What we do</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                    <v-btn :color="hover? 'black' : 'white'" text>Device & App</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                    <v-btn :color="hover? 'black' : 'white'" text>Who we are</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                    <v-btn :color="hover? 'black' : 'white'" text>Scientific validation</v-btn>
                </NuxtLink>
                <NuxtLink :class="hover ? 'custom-link-hovered' : 'custom-link'" to="/">
                    <v-btn :color="hover? 'black' : 'white'" text>Studies & services</v-btn>
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
</style>