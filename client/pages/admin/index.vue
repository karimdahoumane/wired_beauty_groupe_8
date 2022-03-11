<template>
  <v-container fluid>
    <v-card class="dataviz">
      <v-card-title>Activity report</v-card-title>
      <v-card-text>Here are your activity report results for your product : Exquisite Cream</v-card-text>
      <Chart :data="config" id="dataviz"/>
    </v-card>

  </v-container>

</template>

<script>
export default {
    name: 'IndexAdminPage',
    layout: 'admin',
    middleware: 'auth',
  data: () => ({
    config: {
      type: 'line',
      data: {
        labels: ["T0", "T1", "T2", "T3", "T4", "T5", "T6"],
        datasets: [{
          label: 'Mesures sur peau non traitée',
          data: [65, 59, 80, 81, 56, 55, 40],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        },
          {
            label: 'Mesures sur peau traitée',
            data: [100, 53, 110, 89, 75, 50, 35],
            fill: false,
            borderColor: 'rgb(200, 192, 192)',
            tension: 0.1
          }]
      },
    }
  }),
};
</script>

<style scoped>
</style>
