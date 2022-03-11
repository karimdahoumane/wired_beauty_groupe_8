<template>
    <v-row no-gutters justify="center">
        <v-col cols="12">
            <v-dialog v-if="isOpen" v-model="dialog" persistent width="55%">
                <v-card>
                    <v-row no-gutters justify="center">
                        <v-col cols="11">
                            <v-row no-gutters justify="space-between" align="center">
                                <v-col cols="8">
                                    <p class="my-3 text-h4 font-weight-bold">Your cookie settings</p>
                                </v-col>
                                <v-col cols="4">
                                    <v-row no-gutters justify="end">
                                        <v-btn
                                            text
                                            class="text-body-2 font-weight-light"
                                            @click="
                                                deny;
                                                dialog = !dialog;
                                            "
                                        >
                                            {{ $t('Continue without accepting') }}</v-btn
                                        >
                                    </v-row>
                                </v-col>
                            </v-row>
                            <v-divider></v-divider>
                            <p class="my-3 font-weight-light">WELCOME ON WIRED BEAUTY WEBSITE</p>
                            <p class="my-3 text-body-2 font-weight-light">
                                {{
                                    $t(
                                        'Wired Beauty uses cookies, including third-party cookies, for operational purposes, statistical analysis, personalization of your experience, to offer you targeted content adapted to your interests and to analyze the performance of our advertising campaigns.',
                                    )
                                }}
                            </p>
                            <p class="my-3 text-body-2 font-weight-light">
                                {{
                                    $t(
                                        'You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.',
                                    )
                                }}
                            </p>
                            <v-row no-gutters justify="center">
                                <v-hover v-slot="{ hover }">
                                    <v-btn large :color="hover ? 'white' : 'black'" class="my-5 mx-6">
                                        <span :class="hover ? 'black--text' : 'white--text'">{{ $t('Setting cookies') }}</span>
                                    </v-btn>
                                </v-hover>
                                <v-hover v-slot="{ hover }">
                                    <v-btn large :color="hover ? 'white' : 'black'" class="my-5 mx-6">
                                        <span :class="hover ? 'black--text' : 'white--text'">{{ $t('Accept all and continue') }}</span>
                                    </v-btn>
                                </v-hover>
                            </v-row>
                            <p class="my-3 text-body-2 font-weight-light">
                                {{
                                    $t(
                                        'You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.',
                                    )
                                }}
                            </p>
                            <p
                                class="my-3 text-body-2 font-weight-light"
                                v-html="$t('To learn more about our cookie policy, see our Privacy Policy')"
                            ></p>
                        </v-col>
                    </v-row>
                </v-card>
            </v-dialog>
        </v-col>
    </v-row>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
            dialog: true,
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
    
  "en": {
    "Wired Beauty uses cookies, including third-party cookies, for operational purposes, statistical analysis, personalization of your experience, to offer you targeted content adapted to your interests and to analyze the performance of our advertising campaigns.": "Wired Beauty uses cookies, including third-party cookies, for operational purposes, statistical analysis, personalization of your experience, to offer you targeted content adapted to your interests and to analyze the performance of our advertising campaigns.",
    "Accept all and continue": "Accept all and continue",
    "Continue without accepting": "Continue without accepting",
    "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.": "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.",
    "Setting cookies": "Setting cookies",
    "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.": "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.",
    "To learn more about our cookie policy, see our Privacy Policy": "To learn more about our cookie policy, see our <span class='text-decoration-underline'>Privacy Policy</span>"
},
  "fr": {
    "Wired Beauty uses cookies, including third-party cookies, for operational purposes, statistical analysis, personalization of your experience, to offer you targeted content adapted to your interests and to analyze the performance of our advertising campaigns.": "Vos données comptent! Nous utilisons des cookies seulement pour améliorer votre expérience sur notre site.",
    "Accept all and continue": "Accepter et fermer",
    "Continue without accepting": "Continuer sans accepter",
    "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.": "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.",
    "Setting cookies": "Setting cookies",
    "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.": "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.",
    "To learn more about our cookie policy, see our Privacy Policy": "To learn more about our cookie policy, see our <span class='text-decoration-underline'>Privacy Policy</span>"
  },
  "de": {
    "Wired Beauty uses cookies, including third-party cookies, for operational purposes, statistical analysis, personalization of your experience, to offer you targeted content adapted to your interests and to analyze the performance of our advertising campaigns.": "Ihre Daten sind uns wichtig, und wir verwenden Cookies nur, um Ihre Erfahrungen mit unserer Website zu verbessern.",
    "Accept all and continue": "Akzeptieren und schließen",
    "Continue without accepting": "Fortfahren ohne zu akzeptieren",
    "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.": "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.",
    "Setting cookies": "Setting cookies",
    "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.": "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.",
    "To learn more about our cookie policy, see our Privacy Policy": "To learn more about our cookie policy, see our <span class='text-decoration-underline'>Privacy Policy</span>"

  },
  "zho": {
    "Wired Beauty uses cookies, including third-party cookies, for operational purposes, statistical analysis, personalization of your experience, to offer you targeted content adapted to your interests and to analyze the performance of our advertising campaigns.": "我们关心您的数据，我们使用cookies只是为了改善您对我们网站的体验",
    "Accept all and continue": "接受并关闭",
    "Continue without accepting": "继续不接受",
    "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.": "You can accept these cookies by clicking “Accept All and Continue” or click “Set Cookies” to manage your preferences.",
    "Setting cookies": "Setting cookies",
    "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.": "You can modify your preferences at any time by going to the “COOKIES”  section or the “LEGAL INFORMATION & PERSONAL DATA”  section at the bottom of the wired-beauty.com website.",
    "To learn more about our cookie policy, see our Privacy Policy": "To learn more about our cookie policy, see our <span class='text-decoration-underline'>Privacy Policy</span>"
  }
}
</i18n>
