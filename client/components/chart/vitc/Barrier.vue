<template>
    <div>
        <v-row no-gutters>
            <v-col cols="12">
                <v-row class="pr-6 pt-3" justify="end">
                    <v-menu offset-y>
                        <template #activator="{ on, attrs }">
                            <v-btn icon color="#000229" dark v-bind="attrs" v-on="on"><v-icon color="#000229">mdi-download</v-icon></v-btn>
                        </template>
                        <v-list>
                            <v-list-item>
                                <v-list-item-title>.PNG</v-list-item-title>
                                <v-btn icon @click="downloadChartAsPNG(chart)"><v-icon color="#000229">mdi-image</v-icon></v-btn>
                            </v-list-item>
                            <v-list-item>
                                <v-list-item-title>.CSV</v-list-item-title>
                                <v-btn icon @click="downloadChartAsCSV(chart)"><v-icon color="#000229">mdi-file-delimited</v-icon></v-btn>
                            </v-list-item>
                            <v-list-item>
                                <v-list-item-title>.PDF</v-list-item-title>
                                <v-btn icon><v-icon color="#000229">mdi-file-document</v-icon></v-btn>
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
import { createChart, downloadChartAsPNG, downloadChartAsCSV } from '@/services/chart.services';
import { barrierGraphConfig } from '@/chart/vitc/barrierGraph';
export default {
    name: 'VitcBarrier',
    data() {
        return {
            canvasId: 'vitc-barrier',
        };
    },
    mounted() {
        [this.ctx, this.chart] = createChart(this.canvasId, barrierGraphConfig(this.step, this.scope));
    },
    methods: {
        downloadChartAsPNG,
        downloadChartAsCSV,
    },
};
</script>
