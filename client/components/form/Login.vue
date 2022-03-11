<template>
    <v-card color="white" class="pa-3 custom-card">
        <v-form ref="form" v-model="valid" lazy-validation>
            <v-text-field v-model="email" :rules="emailRules" label="E-mail" required></v-text-field>
            <v-text-field
                v-model="password"
                :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                :rules="[rules.required, rules.min]"
                :type="show ? 'text' : 'password'"
                name="input-10-1"
                label="Password"
                hint="At least 8 characters"
                counter
                @click:append="show = !show"
            ></v-text-field>
            <v-hover v-slot="{ hover }">
                <v-btn block :loading="loading" :disabled="!valid" :color="hover ? 'white' : 'black'" class="mr-4" @click="submit">
                    <span :class="hover ? 'black--text' : 'white--text'">Log in</span>
                </v-btn>
            </v-hover>
        </v-form>
    </v-card>
</template>

<script>
export default {
    name: 'LoginForm',
    data: () => ({
        loader: null,
        valid: true,
        loading: false,
        email: '',
        emailRules: [(v) => !!v || 'E-mail is required', (v) => /.+@.+\..+/.test(v) || 'E-mail must be valid'],
        password: '',
        rules: {
            required: (value) => !!value || 'Required.',
            min: (v) => v.length >= 8 || 'Min 8 characters',
        },
        show: false,
    }),
    methods: {
        async submit() {
            this.$refs.form.validate();
            try {
                this.loader = 'loading';
                const l = this.loader;
                this[l] = !this[l];
                await this.$strapi.login({ identifier: this.email, password: this.password });
                this[l] = false;
                this.loader = null;
                await this.$router.push('/admin');
            } catch (e) {
                console.error('An error has occured', e);
            }
        },
    },
};
</script>

<style scoped>
.custom-loader {
    animation: loader 1s infinite;
    display: flex;
}
@-moz-keyframes loader {
    from {
        transform: rotate(0);
    }
    to {
        transform: rotate(360deg);
    }
}
@-webkit-keyframes loader {
    from {
        transform: rotate(0);
    }
    to {
        transform: rotate(360deg);
    }
}
@-o-keyframes loader {
    from {
        transform: rotate(0);
    }
    to {
        transform: rotate(360deg);
    }
}
@keyframes loader {
    from {
        transform: rotate(0);
    }
    to {
        transform: rotate(360deg);
    }
}
</style>
