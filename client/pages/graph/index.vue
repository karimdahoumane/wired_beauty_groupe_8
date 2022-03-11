<template>
  <div>
    <v-row no-gutters>
      <v-col cols = "4">
        <canvas id="chart1" width="20" height="20"></canvas>
      </v-col>
      <v-col cols = "4">
        <canvas id="chart2" width="20" height="20"></canvas>
      </v-col>
      <v-col cols = "4">
        <canvas id="chart3" width="20" height="20"></canvas>
      </v-col>
      <v-col cols = "4">
        <canvas id="chart4" width="20" height="20"></canvas>
      </v-col>
      <v-col cols = "4">
        <canvas id="chart5" width="20" height="20"></canvas>
      </v-col>
      <v-col cols = "4">
        <canvas id="chart6" width="20" height="20"></canvas>
      </v-col>
    </v-row>
  </div>
</template>

<script>
  import Chart from "chart.js/auto";

  export default {
    async mounted() {
      const ctx1 = document.getElementById('chart1').getContext('2d');
      const ctx2 = document.getElementById('chart2').getContext('2d');
      const ctx3 = document.getElementById('chart3').getContext('2d');
      const ctx4 = document.getElementById('chart4').getContext('2d');
      const ctx5 = document.getElementById('chart5').getContext('2d');
      const ctx6 = document.getElementById('chart6').getContext('2d');

      const config = await this.$axios.$get(process.env.API_ENDPOINT+"/graph-test");
      const chart1 = new Chart(ctx1, config[0]);
      const chart2 = new Chart(ctx2, config[1]);
      const chart3 = new Chart(ctx3, config[2]);
      const chart4 = new Chart(ctx4, config[3]);
      const chart5 = new Chart(ctx5, config[4]);
      const chart6 = new Chart(ctx6, config[5]);
    }
  }
</script>
