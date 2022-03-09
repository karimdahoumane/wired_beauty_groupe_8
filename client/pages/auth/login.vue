<template>
  <v-row no-gutters justify="center" align="center" class="img">
    <v-col cols="6">
      <v-card color="white" class="pa-3">
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
          <v-btn :disabled="!valid" color="success" class="mr-4" @click="submit"> Log in </v-btn>
        </v-form>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>


export default {
  layout: 'empty',
  data: () => ({
    valid: true,
    email: '',
    emailRules: [(v) => !!v || 'E-mail is required', (v) => /.+@.+\..+/.test(v) || 'E-mail must be valid'],
    password: '',
    rules: {
      required: value => !!value || 'Required.',
      min: v => v.length >= 8 || 'Min 8 characters'
    },
    show: false,
  }),
  methods: {
    async submit() {
      this.$refs.form.validate();
      try {
        await this.$strapi.login({identifier: this.email, password: this.password});
        console.log("oeoeoe");
      } catch (e) {
        console.log("aled");
      }


    },
  },
}

</script>
