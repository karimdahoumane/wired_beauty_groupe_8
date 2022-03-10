<template>
  <canvas id="myChart" width="20" height="20"></canvas>
</template>

<script>
  import Chart from "chart.js/auto";

  export default {
    async mounted() {
      const ctx = document.getElementById('myChart').getContext('2d');
      const config = await this.$axios.$get(process.env.API_ENDPOINT+"/graph-test");
      const myChart = new Chart(ctx, config);
    }
  }
</script>
