<template>
    <p>Logout in progress</p>
</template>

<script>
export default {
    name: 'LogoutPage',
    layout: 'empty',
    async mounted() {
        await this.$strapi.logout();
        await this.$router.push('/');
    },
};
</script>
