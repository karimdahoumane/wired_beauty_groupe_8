<template>
  <div>
  <v-img height="100vh" cover :src="require(`~/assets/images/image.jpg`)"></v-img>
  <p>Lorem</p>
  <p>Lorem</p>
  <p>Lorem</p>
  <p>Lorem</p>

  <p>Lorem</p>
  <p>Lorem</p>
  </div>
</template>

<script>
export default {
  name: 'IndexPage'
}
</script>

<style scoped>
.image {
  background-image: url('~/assets/images/image.jpg');
  background-position: center top;
  background-size: 100% auto;
  height: 100vh;
}
</style>
