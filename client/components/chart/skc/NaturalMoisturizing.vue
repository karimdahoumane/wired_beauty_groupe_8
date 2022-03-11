<template>
    <div>
        <v-row no-gutters>
            <v-col cols="12">
                <v-row class="pr-6 pt-3" justify="end">
                    <v-menu offset-y>
                        <template #activator="{ on, attrs }">
                            <v-btn icon color="black" dark v-bind="attrs" v-on="on"><v-icon>mdi-download</v-icon></v-btn>
                        </template>
                        <v-list>
                            <v-list-item>
                                <v-list-item-title>.PNG</v-list-item-title>
                                <v-btn icon @click="downloadChartAsPNG(chart)"><v-icon>mdi-image</v-icon></v-btn>
                            </v-list-item>
                        </v-list>
                    </v-menu>
                </v-row>
            </v-col>
        </v-row>
        <canvas :id="canvasId" class="px-3 mt-n3"></canvas>
    </div>
</template>

<script>
import { createChart, downloadChartAsPNG } from '@/services/chart.services';
import { naturalMoisturizingGraphConfig } from '@/chart/skc/naturalMoisturizingGraph';
export default {
    name: 'SkcNaturalMoisturizing',
    data() {
        return {
            canvasId: 'skc-natural-moisturizing',
        };
    },
    mounted() {
        [this.ctx, this.chart] = createChart(this.canvasId, naturalMoisturizingGraphConfig(this.step, this.scope));
    },
    methods: {
        downloadChartAsPNG,
    },
};
</script>
