<template>
    <v-container fluid class="pa-0">
        <div id="device-header" class="large-header">
            <canvas id="device-canvas"></canvas>
            <v-container class="pa-0 custom-row" fluid>
                <v-row no-gutters justify="center" align="center">
                    <v-col cols="10">
                        <h2 class="text-h2 white--text">Some explanations about the application and our involvement in your care.</h2>
                        <h2 class="text-h2 white--text">As well as advice from our partners.</h2>
                    </v-col>
                </v-row>
            </v-container>
            <div class="text-center custom-arrow">
                <v-icon size="50" color="white">mdi-arrow-down</v-icon>
            </div>
        </div>
        <v-row no-gutters class="my-12" justify="center" align="center">
            <v-col cols="8">
                <v-row no-gutters justify="space-between" align="center">
                    <v-col cols="4">
                        <v-img class="pa-3" cover height="500" :src="require(`~/assets/images/photography/scientist_woman.jpg`)">
                            <h5 class="text-h5 white--text">Smart Data X Skin Care</h5>
                            <p class="white--text">Our measurements go from:</p>
                            <p class="white--text">
                                target markers such as ascorbic acid, alpha tocopherol, and squalene/sebum for non-targeted measures of skin barrier
                                function or antioxidant capacity.
                            </p>
                            <p class="white--text">
                                Our scientific partners (link in scientific page) have established that our CIP measurement is statistically
                                correlated to that of chromatography which is the reference methodology as opposed to corneometry. Our technology is
                                complementary to imaging.
                            </p>
                        </v-img>
                    </v-col>
                    <v-col cols="4">
                        <v-img
                            class="pa-3"
                            cover
                            height="500"
                            :src="require(`~/assets/images/photography/scientist_hands.jpg`)"
                            gradient="to top right, rgba(100,115,201,.33), rgba(25,32,72,.7)"
                        >
                            <h5 class="text-h5 white--text">Our incredibly fast algorithm</h5>
                            <p class="white--text">
                                With its IOT, consumer mobile app and standardized single-use patches, Wired Beauty can decimate antioxidant and
                                neutralizing skin reactions in seconds. Artificial intelligence improves the repeatability of the process
                            </p>
                        </v-img>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <v-row no-gutters class="my-12" justify="center" align="center">
            <v-col cols="8">
                <v-row no-gutters>
                    <v-col cols="4">
                        <v-img cover height="500" :src="require(`~/assets/images/photography/scientist_woman.jpg`)"></v-img>
                    </v-col>
                    <v-col cols="8">
                        <div class="px-6">
                            <p class="mb-4 text-h3 font-weight-bold">Nomadic labgrade IOT device & smart app</p>
                            <p class="">
                                WIRED BEAUTY is a French beauty-tech market research company which invested 1,3M€ to develop a non invasive, portable
                                lab connected device to deliver labgrade and real time measurements of skin markers to dermocosmetic lab as well as a
                                smart app in order to also harvest consumer perception.
                            </p>
                            <v-row no-gutters justify="space-between">
                                <v-col cols="5">
                                    <span class="text-h5 font-weight-bold">WB is NEW</span>
                                    <p class="">Hybrid studies combining objective clinical results measurements & consumer perception.</p>
                                </v-col>
                                <v-col cols="5">
                                    <span class="text-h5 font-weight-bold">WB is DIFFERENT</span>
                                    <p class="">
                                        Proprietary IOT and Algorythm allowing decifering within minutes combined with a consumer app harvesting
                                        consumer opinions.
                                    </p>
                                </v-col>
                            </v-row>
                            <span class="text-h5 font-weight-bold">WB is BETTER</span>
                            <p class="">
                                Real World Evidence (link with pollution, UV and lifestyle) of skincare efficiency on large statistical basis (ex 1000
                                testers).
                            </p>
                        </div>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <v-row no-gutters class="my-12" justify="center" align="center">
            <v-col cols="8">
                <v-row no-gutters>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/laboratory.png`)"></v-img>
                        <p class="text-center font-weight-bold">Portable lab device</p>
                        <p class="text-center font-weight-bold">Lab-grade testing</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/smartphone.png`)"></v-img>
                        <p class="text-center font-weight-bold">Smartphone App</p>
                        <p class="text-center font-weight-bold">Feedback and lifestyle data</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/decollable.png`)"></v-img>
                        <p class="text-center font-weight-bold">Single-use peel-off patches</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/data_center.png`)"></v-img>
                        <p class="text-center font-weight-bold">European data center</p>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <v-row no-gutters class="my-12" justify="center" align="center">
            <v-col cols="8">
                <v-row no-gutters justify="center" align="center">
                    <v-col cols="4">
                        <v-img aspect-ratio="1" contain height="200" :src="require(`~/assets/images/icons/patch_orange.png`)"></v-img>
                    </v-col>
                    <v-col cols="4">
                        <v-img aspect-ratio="1" contain height="150" :src="require(`~/assets/images/icons/logo.png`)"></v-img>
                    </v-col>
                    <v-col cols="4">
                        <v-img aspect-ratio="1" contain height="200" :src="require(`~/assets/images/icons/box_skin.png`)"></v-img>
                    </v-col>
                    <v-col cols="4">
                        <p class="mt-3 text-center font-weight-bold">Single-use peel-off patches</p>
                    </v-col>
                    <v-col cols="4">
                        <p class="mt-3 text-center font-weight-bold">Smartphone App</p>
                        <p class="text-center font-weight-bold">Feedback and lifestyle data</p>
                    </v-col>
                    <v-col cols="4">
                        <p class="mt-3 text-center font-weight-bold">Portable lab device</p>
                        <p class="text-center font-weight-bold">Lab-grade testing</p>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <v-row no-gutters class="my-12" justify="center" align="center"> </v-row>
        <v-row no-gutters class="my-12" justify="center" align="center">
            <v-col cols="8">
                <p class="text-h3 text-center font-weight-bold">UVA&B sensor, MAPO® Solaire helps you enjoy the sun with complete peace of mind.</p>
                <p class="text-center">
                    Linked to the Digital Clinic, MAPO® warns you when you have reached 60% of your sun capital. At 100%, the risk of getting a
                    sunburn is maximal.
                </p>
                <p class="text-center">MAPO® adapts to your skin's sensitivity and to the UV of the moment to ensure an optimal follow-up.</p>
                <v-row no-gutters justify="space-between">
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/photography/pink.png`)">
                            <p class="mt-8 font-weight-bold text-center">Family pack</p>
                        </v-img>
                        <p class="text-center font-weight-bold">3 solar mapo : 100 €</p>
                        <p class="text-center font-weight-bold">code : wb100</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/photography/blue.png`)">
                            <p class="mt-8 font-weight-bold text-center">Student pack</p>
                        </v-img>
                        <p class="text-center font-weight-bold">1 solar mapo : 40 €</p>
                        <p class="text-center font-weight-bold">code : etude2</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/photography/grey.png`)">
                            <p class="mt-8 font-weight-bold text-center">Product alone</p>
                        </v-img>
                        <p class="text-center font-weight-bold">1 solar mapo : 50 €</p>
                    </v-col>
                </v-row>
                <v-row no-gutters justify="space-around">
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/stats.png`)"> </v-img>
                        <p class="text-center font-weight-bold">Continuous monitoring</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/thumb.png`)"> </v-img>
                        <p class="text-center font-weight-bold">Practical</p>
                    </v-col>
                    <v-col cols="3">
                        <v-img aspect-ratio="1" :src="require(`~/assets/images/icons/water.png`)"> </v-img>
                        <p class="text-center font-weight-bold">Sensible</p>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <v-row no-gutters class="my-12" justify="center" align="center">
            <v-col cols="8">
                <v-row no-gutters justify="space-around">
                    <v-col cols="6">
                        <p><span class="font-weight-bold">Dimensions :</span> 125 x34 x 10 mm</p>
                        <p><span class="font-weight-bold">Weight :</span> 70g</p>
                        <p><span class="font-weight-bold">Coloris :</span> Blue / Grey / Red</p>
                        <p><span class="font-weight-bold">Textil :</span> 25% Basthanne / 75% Polyester / REACH norm</p>
                        <p><span class="font-weight-bold">Battery autonomy :</span> one week if 100% charged</p>
                        <p><span class="font-weight-bold">Lifespan of a battery :</span> 2+ years</p>
                    </v-col>
                    <v-col cols="6">
                        <p><span class="font-weight-bold">Water resistance :</span> splash and perspiration resistant</p>
                        <p><span class="font-weight-bold">Os :</span> iOS 9+</p>
                        <p><span class="font-weight-bold">Bluetooth :</span> Bluetooth 4J (BLE)</p>
                        <p><span class="font-weight-bold">Components :</span> UV captors / LEDs</p>
                        <p><span class="font-weight-bold">Manufactory :</span> France</p>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import { polygonEffect } from '~/services/polygonEffect';
export default {
    mounted() {
        polygonEffect('device-canvas', 'device-header');
    },
};
</script>

<style scoped>
.custom-row {
    position: absolute;
    top: 55%;
    left: 50%;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}
.custom-arrow {
    position: absolute;
    top: 90%;
    left: 50%;
}
.img-rounded {
    border-radius: 50%;
}
</style>
