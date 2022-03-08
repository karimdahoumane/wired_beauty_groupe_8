<template>
    <div>
        <v-select color="white" v-model="$i18n.locale" :items="allAvailableLocales" item-value="code" item-text="name">
        </v-select>
    </div>
</template>

<script>
export default {
    computed: {
        availableLocales() {
            return this.$i18n.locales.filter(i => i.code !== this.$i18n.locale);
        },
        allAvailableLocales() {
            return this.$i18n.locales.filter(i => i.code);
        }
    }
}
</script>
