<template>
    <div>
        <v-card color="white" width="500" class="pa-3">
            <v-form ref="form" v-model="valid" lazy-validation>
                <v-text-field v-model="name" :counter="10" :rules="nameRules" label="Name" required></v-text-field>

                <v-text-field v-model="email" :rules="emailRules" label="E-mail" required></v-text-field>

                <v-select v-model="select" :items="items" :rules="[(v) => !!v || 'Item is required']" label="Contact us" required></v-select>

                <v-checkbox v-model="checkbox" label="Subscribe to our newsletter"></v-checkbox>

                <v-hover v-slot="{ hover }">
                    <v-btn block :disabled="!valid" :color="hover ? 'white' : 'black'" class="mr-4" @click="validate">
                        <span :class="hover ? 'black--text' : 'white--text'">Validate</span>
                    </v-btn>
                </v-hover>
            </v-form>
        </v-card>
        <v-row no-gutters justify="space-around" align="center">
            <a href="https://play.google.com/store">
                <GooglePlayStoreBadge />
            </a>
            <a href="https://www.apple.com/fr/app-store/">
                <AppleAppStoreBadge />
            </a>
        </v-row>
    </div>
</template>

<script>
export default {
    name: 'FormPanelist',
    data: () => ({
        valid: true,
        name: '',
        nameRules: [(v) => !!v || 'Name is required', (v) => (v && v.length <= 10) || 'Name must be less than 10 characters'],
        email: '',
        emailRules: [(v) => !!v || 'E-mail is required', (v) => /.+@.+\..+/.test(v) || 'E-mail must be valid'],
        select: null,
        items: ['Become a panelist', 'Webinar inovation', 'Meet the team', 'Other'],
        checkbox: false,
    }),
    methods: {
        validate() {
            this.$refs.form.validate();
        },
    },
};
</script>
