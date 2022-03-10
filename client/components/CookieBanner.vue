<template>
    <v-row no-gutters justify="center">
        <v-col cols="12">
            <v-bottom-sheet v-if="isOpen" v-model="sheet" hide-overlay scrollable persistent no-click-animation>
                <v-card tile class="px-sm-6">
                    <v-row no-gutters align-sm="center">
                        <v-col cols="12 col-sm-5">
                            <v-card-text class="pa-0 ma-0">
                                <p class="text-caption text-sm-body-1 ma-0 pa-3">
                                    {{ $t('p') }}
                                </p>
                            </v-card-text>
                        </v-col>
                        <v-col cols="12 col-sm-5">
                            <v-btn
                                :block="block"
                                x-large
                                rounded
                                class="green white--text text-caption text-sm-button pa-3 mx-sm-2"
                                @click="accept"
                                >{{ $t('button_accept') }}</v-btn
                            >
                            <v-btn
                                :block="block"
                                x-large
                                rounded
                                color="white"
                                class="text-caption text-sm-button pa-3 mx-sm-2 custom-blue-text"
                                @click="
                                    deny;
                                    sheet = !sheet;
                                "
                            >
                                {{ $t('button_deny') }}</v-btn
                            >
                        </v-col>
                    </v-row>
                </v-card>
            </v-bottom-sheet>
        </v-col>
    </v-row>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
            sheet: true,
        };
    },
    computed: {
        block() {
            if (this.$vuetify.breakpoint.name) {
                switch (this.$vuetify.breakpoint.name) {
                    case 'xs':
                        return true;
                    case 'sm':
                        return false;
                    case 'md':
                        return false;
                    case 'lg':
                        return false;
                    case 'xl':
                        return false;
                }
            }

            return false;
        },
    },
    created() {
        if (!this.getGDPR() === true) {
            this.isOpen = true;
        }
    },
    methods: {
        deny() {
            if (process.browser) {
                this.isOpen = false;
                localStorage.setItem('GDPR:accepted', false);
            }
        },
        accept() {
            if (process.browser) {
                this.isOpen = false;
                localStorage.setItem('GDPR:accepted', true);
            }
        },
        getGDPR() {
            if (process.browser) {
                return localStorage.getItem('GDPR:accepted', true);
            }
        },
    },
};
</script>

<style scoped>
.v-btn {
    text-transform: none !important;
    font-weight: bold;
}
</style>

<i18n>
{
  "fr": {
    "p": "Vos données comptent! Nous utilisons des cookies seulement pour améliorer votre expérience sur notre site.",
    "button_accept": "Accepter et fermer",
    "button_deny": "Continuer sans accepter"
  },
  "en": {
    "p": "We care about your data, and we use  cookies only to improve your experience with our website.",
    "button_accept": "Accept and close",
    "button_deny": "Continue without accepting"
  }
}
</i18n>
