<template>
  <div class="submit-form">
    <div v-if="!submitted">
      <div class="form-group">
        <label for="title">Title</label>
        <input
          type="text"
          class="form-control"
          id="title"
          required
          v-model="team.name"
          name="name"
        />
      </div>

      <div class="form-group">
        <label for="job">job</label>
        <input
          class="form-control"
          id="job"
          required
          v-model="team.job"
          name="job"
        />
      </div>

      <button @click.prevent="saveteam()" class="btn btn-success">Submit</button>
    </div>

    <div v-else>
      <h4>You submitted successfully!</h4>
      <button class="btn btn-success" @click="newteam">Add</button>
    </div>
  </div>
</template>

<script>
// import teamDataService from "../services/teamDataService";
import axios from 'axios';
export default {
  name: "add-team",
  data() {
    return {
      team: {
        id: null,
        name: "",
        job: "",
        published: false
      },
      submitted: false
    };
  },
  methods: {
  async  saveteam() {
      var data = {
        name: this.team.name,
        job: this.team.job
      }
       let response= await axios.post('http://127.0.0.1:8000/api/teams',data)
      console.log(response)
      }
      

//       teamDataService.create(data)
//         .then(response => {
//           this.team.id = response.data.id;
//           console.log(response.data);
//           this.submitted = true;
//         })
//         .catch(e => {
//           console.log(e);
//         });
//     },
    
//     newteam() {
//       this.submitted = false;
//       this.team = {};
//     }
//   }
},}
</script>

<style>
.submit-form {
  max-width: 300px;
  margin: auto;
}
</style>