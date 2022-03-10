<template>
  <p class="white--text">Logout in progress</p>
</template>

<script>

export default {
  layout: 'empty',
  async mounted() {
    await this.$strapi.logout();
    await this.$router.push('/');
  }
}

</script>
