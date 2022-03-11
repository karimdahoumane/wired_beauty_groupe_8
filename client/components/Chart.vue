<template>
  <canvas :id="id"></canvas>
</template>

<script>
import Chart from "chart.js/auto";
export default {
  props: {
    data: { type: Object || Array, required: true },
    id: {type: String, required: true}
  },

  async mounted() {
    const ctx = document.getElementById(this.id).getContext('2d');
    const myChart = new Chart(ctx, this.data);
  }

}
</script>
