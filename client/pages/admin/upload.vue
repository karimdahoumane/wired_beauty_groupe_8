<template>
    <v-form lazy-validation ref="form">
      <v-file-input id="excel-import" name="excel-import" accept=".xlsx" label="Upload your XLSX file" @change="handleFileUpload($event)"></v-file-input>
      <v-hover v-slot="{ hover }">
        <v-btn :color="hover ? 'white' : 'black'" block @click="submitFile" >
          <span :class="hover ? 'black--text' : 'white--text'">Upload</span>
        </v-btn>
      </v-hover>
    </v-form>
</template>

<script>
export default {
  layout: 'admin',
  middleware: 'auth',
  methods: {
    /* Submits the file to the server */
    submitFile(){
      /* Initialize the form data */
      let formData = new FormData();
      /* Add the form data we need to submit */
      let file = document.getElementById('excel-import');
      formData.append('excel', file.files[0]);
      /* Make the request to the POST /single-file URL */
      return  this.$axios.post(process.env.API_ENDPOINT+"/upload-excel",
        formData,
        {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        }).then(function(){
          console.log('SUCCESS!!');
        })
        .catch(function(){
          console.log('FAILURE!!');
        });
    },
    /* Handles a change on the file upload*/
    handleFileUpload(event){
      this.file = event.target.files[0];
    }
  }
}
</script>
