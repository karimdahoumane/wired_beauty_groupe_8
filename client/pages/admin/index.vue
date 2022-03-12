<template>
    <v-container fluid class="pa-0">
        <p class="text-h3">Comparison of measurements on treated and untreated skins</p>
        <v-row no-gutters>
            <v-col cols="4">
                <v-card class="dataviz ma-3"> <ChartSkcAntiOxydant /> </v-card>
            </v-col>
            <v-col cols="4">
                <v-card class="dataviz ma-3"> <ChartSkcBarrier /> </v-card>
            </v-col>
            <v-col cols="4">
                <v-card class="dataviz ma-3"> <ChartSkcNaturalMoisturizing /> </v-card>
            </v-col>
            <v-col cols="4">
                <v-card class="dataviz ma-3"> <ChartVitcAntiOxydant /> </v-card>
            </v-col>
            <v-col cols="4">
                <v-card class="dataviz ma-3"> <ChartVitcBarrier /> </v-card>
            </v-col>
            <v-col cols="4">
                <v-card class="dataviz ma-3"> <ChartVitcNaturalMoisturizing /> </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: 'IndexAdminPage',
    layout: 'admin',
    middleware: 'auth',
};
</script>
