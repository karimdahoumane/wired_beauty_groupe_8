<template>
  <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <span>Upload your file (format XLSX)</span>

    <input
      type="file"
      id="excel-import"
      name="excel-import"
      @change="handleFileUpload($event)"
    />

    <input
      type="submit"
      @click="submitFile()"
    />
  </div>
</template>

<script>
export default {


  methods: {
    /*
      Submits the file to the server
    */
    submitFile(){
      /*
              Initialize the form data
          */
      let formData = new FormData();

      /*
          Add the form data we need to submit
      */
      let file = document.getElementById('excel-import');
      formData.append('excel', file.files[0]);

      /*
        Make the request to the POST /single-file URL
      */
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

    /*
      Handles a change on the file upload
    */
    handleFileUpload(event){
      this.file = event.target.files[0];
    }
  }
}
</script>
