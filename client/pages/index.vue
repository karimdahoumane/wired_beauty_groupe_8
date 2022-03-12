<template>
    <v-container fluid class="pa-0">
        <div id="large-header" class="large-header">
            <canvas id="index-canvas"></canvas>
            <v-row align="center" justify="center">
                <h2 class="text-h2 font-weight-bold custom-title white--text">{{ $t('A new way to test cosmetics') }}</h2>
                <v-hover v-slot="{ hover }">
                    <v-btn
                        large
                        rounded
                        outlined
                        :class="hover ? 'bg-white' : 'bg-transparent'"
                        :color="hover ? 'black' : 'white'"
                        class="custom-button"
                        >{{ $t('Watch the event') }}</v-btn
                    >
                </v-hover>
            </v-row>
        </div>
        <!-- md+ laptop/desktop -->
        <v-container fluid class="pt-8 bg-white d-none d-md-flex" :style="marginContainer">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12 col-md-9">
                    <h2 class="text-h2 text-center mb-16">BeautyTech X Skincare</h2>
                    <div style="margin-top: 10%" data-aos="fade-right" data-aos-duration="2000">
                        <img :style="imageHeight" :src="require(`~/assets/images/photography/microscope.jpg`)" />
                        <div class="custom-block-one">
                            <v-row no-gutters justify="center" align="center">
                                <v-col cols="12">
                                    <h4 class="text-h4 ml-4 mb-3">WE RESEARCH SKINCARE</h4>
                                </v-col>
                                <v-col cols="8">
                                    <p class="">WIRED BEAUTY is a new datadriven market research company dedicated to cosmetic laboratories.</p>
                                    <p class="">
                                        We help our clients evaluate and develop skincare formulae by comparing cosmetics on statistically viable
                                        samples of men & women (1000 people):
                                    </p>
                                    <ul>
                                        <li>the antioxydative and moisterizing effect of formulae (in vivo)</li>
                                        <li>the antioxydative and moisterizing effect of ingredients (in vitro) (cf Reach)</li>
                                        <li>consumer feedback after product use</li>
                                        <li>environmental conditions (UV pollution) surronding the consumer’s lifestyle</li>
                                        <li>skincare performance after 1 day – 8 days – 15 days - X days.</li>
                                    </ul>
                                </v-col>
                            </v-row>
                        </div>
                    </div>
                </v-col>
            </v-row>
        </v-container>
        <v-container fluid class="pt-8 bg-lightgray d-none d-md-flex" :style="marginContainer">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12 col-md-9">
                    <div data-aos="fade-left" data-aos-duration="2000">
                        <div class="custom-block-two">
                            <v-row no-gutters justify="center" align="center">
                                <v-col cols="12">
                                    <h4 class="text-h4 ml-4 mb-3">WE RELY ON DATA & TECHNOLOGY</h4>
                                </v-col>
                                <v-col cols="8">
                                    <ul>
                                        <li>
                                            Proprietary nomadic lab device & patented skin patches to decipher skin reactions and ingredient presence
                                        </li>
                                        <li>Easy multi-lingual smartphone app and customer feedback</li>
                                        <li>Geolocalisation and exposome data (UV - pollution - temperature)</li>
                                        <li>Repeatability of protocols in real life conditions (ie bathrooms)</li>
                                        <li>Large cohorts it needed</li>
                                        <li>Saas and European data center</li>
                                    </ul>
                                </v-col>
                            </v-row>
                        </div>
                        <v-row no-gutters justify="end">
                            <img :style="imageHeight" :src="require(`~/assets/images/photography/device.jpg`)" />
                        </v-row>
                    </div>
                </v-col>
            </v-row>
        </v-container>
        <v-container fluid class="pt-8 bg-white d-none d-md-flex" :style="marginContainer">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12 col-md-9">
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <div class="custom-block-one">
                            <v-row no-gutters justify="center" align="center">
                                <v-col cols="12">
                                    <h4 class="text-h4 ml-4 mb-3 font-weight-bold">
                                        WE MEASURE SKIN VITALITY RESPONSE & CONSUMER PERCEPTION SIMULTANOUSLY
                                    </h4>
                                </v-col>
                                <v-col cols="8">
                                    <p>
                                        Our clients evaluate and develop skincare formulae by comparing cosmetics on statistically viable samples of
                                        men & women (1000 people) :
                                    </p>
                                    <ul>
                                        <li>The antioxydative and moisterizing effect of formulae (in vivo)</li>
                                        <li>The antioxydative and moisterizing effect of ingredients (in vitro) ➢ see REACH</li>
                                        <li>The consumer feedback after product use</li>
                                        <li>The environmental conditions (UV pollution) surronding the consumer’s lifestyle</li>
                                        <li>The skincare performance after 1 day – 8 days – 15 days - X days.</li>
                                    </ul>
                                </v-col>
                            </v-row>
                        </div>
                        <img :style="imageHeight" :src="require(`~/assets/images/photography/skin_tech.jpg`)" />
                    </div>
                </v-col>
            </v-row>
        </v-container>
        <v-container fluid class="pt-8 bg-lightgray d-none d-md-flex" :style="marginContainer">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12 col-md-9">
                    <div data-aos="fade-left" data-aos-duration="2000">
                        <div class="custom-block-two">
                            <v-row no-gutters justify="center" align="center">
                                <v-col cols="12">
                                    <h4 class="text-h4 ml-4 text-center mb-3">WE WORK FOR LABS AND MARKETING TEAMS</h4>
                                </v-col>
                                <v-col cols="8">
                                    <ul>
                                        <li>Combining efforts with countries usual CRO’s</li>
                                        <li>In all countries, even in China where anonymized data is key</li>
                                    </ul>
                                </v-col>
                            </v-row>
                        </div>
                        <v-row no-gutters justify="end">
                            <img :style="imageHeight" :src="require(`~/assets/images/photography/microscope2.jpg`)" />
                        </v-row>
                    </div>
                </v-col>
            </v-row>
        </v-container>
        <v-container fluid class="pt-8 bg-white d-none d-md-flex" :style="marginContainer">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12 col-md-9">
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <div class="custom-block-one">
                            <v-row no-gutters justify="center" align="center">
                                <v-col cols="12">
                                    <h4 class="text-h4 ml-4 mb-3 font-weight-bold">WE HELP</h4>
                                </v-col>
                                <v-col cols="8">
                                    <p><span class="text-h6 font-weight-bold">DISCOVER</span> new claims on large skin type cohorts</p>
                                    <p><span class="text-h6 font-weight-bold">PROVE</span> claims through large data intelligence</p>
                                    <p><span class="text-h6 font-weight-bold">REALLY UNDERSTAND</span> skin reactions in absence of product</p>
                                    <p><span class="text-h6 font-weight-bold">COMPARE</span> performance on a long-term basis (Cohorts follow-up)</p>
                                    <p><span class="text-h6 font-weight-bold">UNDERSTANDING</span> exposome and skin</p>
                                    <p>
                                        <span class="text-h6 font-weight-bold">SAVE TIME</span> vs chromatography and
                                        <span class="text-h6 font-weight-bold">IMROVE</span> results vs TWEL.
                                    </p>
                                    <p><span class="text-h6 font-weight-bold">READ SIMULTANOUSLY</span> skin response & consumer feed-back</p>
                                </v-col>
                            </v-row>
                        </div>
                        <img :style="imageHeight" :src="require(`~/assets/images/photography/product.jpg`)" />
                    </div>
                </v-col>
            </v-row>
        </v-container>
        <!-- mobile -->
        <v-container fluid class="pt-8 bg-white d-flex d-md-none">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12">
                    <h2 class="text-h2 text-center mb-16">BeautyTech X Skincare</h2>
                    <v-row no-gutters justify="center" align="center">
                        <img :style="imageHeight" :src="require(`~/assets/images/photography/microscope.jpg`)" />
                        <v-col cols="8">
                            <h4 class="text-h4 text-center mb-3">We research skincare</h4>
                            <p class="">WIRED BEAUTY is a new datadriven market research company dedicated to cosmetic laboratories.</p>
                            <p class="">
                                We help our clients evaluate and develop skincare formulae by comparing cosmetics on statistically viable samples of
                                men & women (1000 people):
                            </p>
                            <ul>
                                <li>the antioxydative and moisterizing effect of formulae (in vivo)</li>
                                <li>the antioxydative and moisterizing effect of ingredients (in vitro) (cf Reach)</li>
                                <li>consumer feedback after product use</li>
                                <li>environmental conditions (UV pollution) surronding the consumer’s lifestyle</li>
                                <li>skincare performance after 1 day – 8 days – 15 days - X days.</li>
                            </ul>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
        <v-container fluid class="pt-8 bg-lightgray d-flex d-md-none">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12">
                    <v-row no-gutters justify="center" align="center">
                        <img :style="imageHeight" :src="require(`~/assets/images/photography/microscope.jpg`)" />
                        <v-col cols="8">
                            <h6 class="text-h6 text-center mb-3">We rely on data & technology</h6>
                            <ul>
                                <li>Proprietary nomadic lab device & patented skin patches to decipher skin reactions and ingredient presence</li>
                                <li>Easy multi-lingual smartphone app and customer feedback</li>
                                <li>Geolocalisation and exposome data (UV - pollution - temperature)</li>
                                <li>Repeatability of protocols in real life conditions (ie bathrooms)</li>
                                <li>Large cohorts it needed</li>
                                <li>Saas and European data center</li>
                            </ul>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
        <v-container fluid class="pt-8 bg-white d-flex d-md-none">
            <v-row no-gutters justify="center" align="center">
                <v-col cols="12">
                    <v-row no-gutters justify="center" align="center">
                        <img :style="imageHeight" :src="require(`~/assets/images/photography/skin_tech.jpg`)" />
                        <v-col cols="8">
                            <h6 class="text-h6 text-center mb-3">We measure skin vitality response & consumer perception simultanously</h6>
                            <p>
                                our clients evaluate and develop skincare formulae by comparing cosmetics on statistically viable samples of men &
                                women (1000 people) :
                            </p>
                            <ul>
                                <li>The antioxydative and moisterizing effect of formulae (in vivo)</li>
                                <li>The antioxydative and moisterizing effect of ingredients (in vitro) ➢ see REACH</li>
                                <li>The consumer feedback after product use</li>
                                <li>The environmental conditions (UV pollution) surronding the consumer’s lifestyle</li>
                                <li>The skincare performance after 1 day – 8 days – 15 days - X days.</li>
                            </ul>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
    </v-container>
</template>

<script>
import aosMixin from '~/mixins/aos';
import { polygonEffect } from '~/services/polygonEffect';

export default {
    name: 'IndexPage',
    mixins: [aosMixin],
    computed: {
        imageHeight() {
            switch (this.$vuetify.breakpoint.name) {
                case 'xs':
                    return 'height: 200px';
                case 'sm':
                    return 'height: 250px';
                case 'md':
                    return 'height: 250px';
                case 'lg':
                    return 'height: 300px';
                case 'xl':
                    return 'height: 400px';
                default:
                    return 'height: 300px';
            }
        },
        marginContainer() {
            switch (this.$vuetify.breakpoint.name) {
                case 'xs':
                    return 'margin-bottom: 20%';
                case 'sm':
                    return 'margin-bottom: 20%';
                case 'md':
                    return 'margin-bottom: 30%';
                case 'lg':
                    return 'margin-bottom: 11%';
                case 'xl':
                    return 'margin-bottom: 11%';
                default:
                    return 'margin-bottom: 11%';
            }
        },
    },
    mounted() {
        polygonEffect('index-canvas', 'large-header');
    },
};
</script>

<style lang="scss">
@import '@/assets/variables.scss';
.margin-top-app-bar {
    margin-top: $app-bar-height;
}
.large-header {
    position: relative;
    width: 100%;
    overflow: hidden;
    background-size: cover;
    background-position: center center;
}
#large-header,
#login-header,
#panelist-header,
#device-header {
    background: url('~/assets/images/hand_bottle.jpg') no-repeat center;
    background-size: cover;
    height: 100vh;
}
.custom-title {
    position: absolute;
    top: 45%;
    left: 50%;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}
.custom-button {
    position: absolute;
    top: 75%;
    left: 50%;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}
.bg-white {
    background: white;
}
.bg-transparent {
    background: transparent;
}
.bg-lightgray {
    background: #f7f6f2;
}
.custom-block-one {
    position: absolute;
    background-color: rgba(222, 161, 72, 0.42);
    z-index: 2;
    top: -25%;
    left: 40%;
    padding-top: 10px;
    padding-bottom: 50px;
    margin-top: 30px;
}
.custom-block-two {
    position: absolute;
    background-color: rgba(222, 161, 72, 0.42);
    z-index: 2;
    top: 0;
    left: 0;
    right: 40%;
    padding-top: 10px;
    padding-bottom: 50px;
    margin-top: 30px;
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
    "A new way to test cosmetics": "A new way to test cosmetics",
    "Watch the event": "Watch the event"
  },
  "fr": {
    "A new way to test cosmetics": "Une nouvelle façon de tester les cosmétiques",
    "Watch the event": "Regardez l'événement"
  },
  "de": {
    "A new way to test cosmetics": "Eine neue Art, Kosmetika zu testen",
    "Watch the event": "Die Veranstaltung ansehen"
  },
  "zho": {
    "A new way to test cosmetics": "测试化妆品的新方法",
    "Watch the event": "观看活动"
  }
}
</i18n>
