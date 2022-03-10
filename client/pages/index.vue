<template>
    <v-container fluid class="pa-0">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <v-row align="center" justify="center">
                <h2 class="text-h2 font-weight-bold custom-title white--text">A new way to test cosmetics</h2>
                <v-hover v-slot="{ hover }">
                    <v-btn
                        large
                        rounded
                        outlined
                        :class="hover ? 'bg-white' : 'bg-transparent'"
                        :color="hover ? 'black' : 'white'"
                        class="custom-button"
                        >Watch the event</v-btn
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
                        <img :style="imageHeight" :src="require(`~/assets/images/microscope.jpg`)" />
                        <div class="custom-block-one">
                            <v-row no-gutters justify="center" align="center">
                                <v-col cols="8">
                                    <h4 class="text-h4 text-center mb-3">We research skincare</h4>
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
                                <v-col cols="8">
                                    <h6 class="text-h6 text-center mb-3">We rely on data & technology</h6>
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
                            <img :style="imageHeight" :src="require(`~/assets/images/microscope.jpg`)" />
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
                                <v-col cols="8">
                                    <h6 class="text-h6 text-center mb-3">We measure skin vitality response & consumer perception simultanously</h6>
                                    <p>
                                        our clients evaluate and develop skincare formulae by comparing cosmetics on statistically viable samples of
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
                        <img :style="imageHeight" :src="require(`~/assets/images/microscope.jpg`)" />
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
                        <img :style="imageHeight" :src="require(`~/assets/images/microscope.jpg`)" />
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
                        <img :style="imageHeight" :src="require(`~/assets/images/microscope.jpg`)" />
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
                        <img :style="imageHeight" :src="require(`~/assets/images/microscope.jpg`)" />
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
import { gsap } from 'gsap';
import { TweenLite, Circ } from 'gsap/dist/gsap';
import aosMixin from '~/mixins/aos';

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
        gsap.registerPlugin(TweenLite, Circ);
        (function () {
            let width;
            let height;
            let largeHeader;
            let canvas;
            let ctx;
            let points;
            let target;
            let animateHeader = true;

            // Main
            initHeader();
            initAnimation();
            addListeners();

            function initHeader() {
                width = window.innerWidth;
                height = window.innerHeight;
                target = { x: width / 2, y: height / 2 };

                largeHeader = document.getElementById('large-header');
                largeHeader.style.height = height + 'px';

                canvas = document.getElementById('demo-canvas');
                canvas.width = width;
                canvas.height = height;
                ctx = canvas.getContext('2d');

                // create points
                points = [];
                for (let x = 0; x < width; x = x + width / 20) {
                    for (let y = 0; y < height; y = y + height / 20) {
                        const px = x + (Math.random() * width) / 20;
                        const py = y + (Math.random() * height) / 20;
                        const p = { x: px, originX: px, y: py, originY: py };
                        points.push(p);
                    }
                }

                // for each point find the 5 closest points
                for (let i = 0; i < points.length; i++) {
                    const closest = [];
                    const p1 = points[i];
                    for (let j = 0; j < points.length; j++) {
                        const p2 = points[j];
                        if (!(p1 === p2)) {
                            let placed = false;
                            for (let k = 0; k < 5; k++) {
                                if (!placed) {
                                    if (closest[k] === undefined) {
                                        closest[k] = p2;
                                        placed = true;
                                    }
                                }
                            }

                            for (let k = 0; k < 5; k++) {
                                if (!placed) {
                                    if (getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                        closest[k] = p2;
                                        placed = true;
                                    }
                                }
                            }
                        }
                    }
                    p1.closest = closest;
                }

                // assign a circle to each point
                for (const i in points) {
                    const c = new Circle(points[i], 2 + Math.random() * 2, 'rgba(255,255,255,0)');
                    points[i].circle = c;
                }
            }

            // Event handling
            function addListeners() {
                if (!('ontouchstart' in window)) {
                    window.addEventListener('mousemove', mouseMove);
                }
                window.addEventListener('scroll', scrollCheck);
                window.addEventListener('resize', resize);
            }

            function mouseMove(e) {
                let posy = 0;
                let posx = 0;
                if (e.pageX || e.pageY) {
                    posx = e.pageX;
                    posy = e.pageY;
                } else if (e.clientX || e.clientY) {
                    posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                    posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
                }
                target.x = posx;
                target.y = posy;
            }

            function scrollCheck() {
                if (document.body.scrollTop > height) animateHeader = false;
                else animateHeader = true;
            }

            function resize() {
                width = window.innerWidth;
                height = window.innerHeight;
                largeHeader.style.height = height + 'px';
                canvas.width = width;
                canvas.height = height;
            }

            // animation
            function initAnimation() {
                animate();
                for (const i in points) {
                    shiftPoint(points[i]);
                }
            }

            function animate() {
                if (animateHeader) {
                    ctx.clearRect(0, 0, width, height);
                    for (const i in points) {
                        // detect points in range
                        if (Math.abs(getDistance(target, points[i])) < 4000) {
                            points[i].active = 0.3;
                            points[i].circle.active = 0.6;
                        } else if (Math.abs(getDistance(target, points[i])) < 20000) {
                            points[i].active = 0.1;
                            points[i].circle.active = 0.3;
                        } else if (Math.abs(getDistance(target, points[i])) < 40000) {
                            points[i].active = 0.02;
                            points[i].circle.active = 0.1;
                        } else {
                            points[i].active = 0;
                            points[i].circle.active = 0;
                        }

                        drawLines(points[i]);
                        points[i].circle.draw();
                    }
                }
                requestAnimationFrame(animate);
            }

            function shiftPoint(p) {
                TweenLite.to(p, 1 + 1 * Math.random(), {
                    x: p.originX - 50 + Math.random() * 100,
                    y: p.originY - 50 + Math.random() * 100,
                    ease: Circ.easeInOut,
                    onComplete() {
                        shiftPoint(p);
                    },
                });
            }

            // Canvas manipulation
            function drawLines(p) {
                if (!p.active) return;
                for (const i in p.closest) {
                    ctx.beginPath();
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(p.closest[i].x, p.closest[i].y);
                    ctx.strokeStyle = 'rgba(255,255,255,' + p.active + ')';
                    ctx.stroke();
                }
            }

            function Circle(pos, rad, color) {
                const _this = this;

                // constructor
                (function () {
                    _this.pos = pos || null;
                    _this.radius = rad || null;
                    _this.color = color || null;
                })();

                this.draw = function () {
                    if (!_this.active) return;
                    ctx.beginPath();
                    ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
                    ctx.fillStyle = 'rgba(255,255,255,' + _this.active + ')';
                    ctx.fill();
                };
            }

            // Util
            function getDistance(p1, p2) {
                return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
            }
        })();
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
#large-header {
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
</style>
