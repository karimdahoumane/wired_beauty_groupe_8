<template>
    <div class="text-center">
        <v-menu offset-y>
            <template #activator="{ on, attrs }">
                <v-btn :color="hover ? 'black' : 'white'" text v-bind="attrs" v-on="on">
                    {{ $i18n.locale }}
                </v-btn>
            </template>
            <v-list>
                <v-list-item v-for="(item, index) in allAvailableLocales" :key="index" @click="$i18n.locale = item.code">
                    <v-list-item-title>{{ item.name }}</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>
    </div>
</template>

<script>
export default {
    props: ['hover'],
    computed: {
        availableLocales() {
            return this.$i18n.locales.filter((i) => i.code !== this.$i18n.locale);
        },
        allAvailableLocales() {
            return this.$i18n.locales.filter((i) => i.code);
        },
    },
};
</script>

<style scoped></style>
