<template>
    <v-row no-gutters justify="center" align="center" class="img">
        <div id="large-header" class="large-header">
            <canvas id="panelist-canvas"></canvas>
            <v-col cols="6">
                <v-card color="white" class="pa-3">
                    <v-form ref="form" v-model="valid" lazy-validation>
                        <v-text-field v-model="name" :counter="10" :rules="nameRules" label="Name" required></v-text-field>

                        <v-text-field v-model="email" :rules="emailRules" label="E-mail" required></v-text-field>

                        <v-select v-model="select" :items="items" :rules="[(v) => !!v || 'Item is required']" label="Item" required></v-select>

                        <v-checkbox
                            v-model="checkbox"
                            :rules="[(v) => !!v || 'You must agree to continue!']"
                            label="Do you agree?"
                            required
                        ></v-checkbox>

                        <v-btn :disabled="!valid" color="success" class="mr-4" @click="validate"> Validate </v-btn>
                    </v-form>
                </v-card>
            </v-col>
        </div>
    </v-row>
</template>

<script>
import { PolygonEffect } from '~/services/polygonEffect';

export default {
    data: () => ({
        valid: true,
        name: '',
        nameRules: [(v) => !!v || 'Name is required', (v) => (v && v.length <= 10) || 'Name must be less than 10 characters'],
        email: '',
        emailRules: [(v) => !!v || 'E-mail is required', (v) => /.+@.+\..+/.test(v) || 'E-mail must be valid'],
        select: null,
        items: ['Item 1', 'Item 2', 'Item 3', 'Item 4'],
        checkbox: false,
    }),
    mounted() {
        PolygonEffect('panelist-canvas');
    },
    methods: {
        validate() {
            this.$refs.form.validate();
        },
    },
};
</script>

<style scoped>
.img {
    /* background-image: url('~/assets/images/image.jpg'); */
    background-position: center top;
    background-size: 100% auto;
    height: 100vh;
}
</style>
