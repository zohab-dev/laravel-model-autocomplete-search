<template>
  <div>
      <vue-bootstrap-typeahead
        v-model="query"
        :data="students"
        />
  </div>
</template>

<script>

import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'

export default {
components: {
        VueBootstrapTypeahead
    },

  data() {
    return {
        query:'',
        students:[],
    }
  },

   mounted() {
        console.log('Component mounted.')
        this.getStudents();
    },

  methods: {
    async getAddresses(query) {
      const res = await fetch(API_URL.replace(':query', query))
      const suggestions = await res.json()
      this.addresses = suggestions.suggestions
    },
    getStudents(){
        axios.get('/get-students').then(response=>{
            console.log(response.data);
            this.students = response.data;
        });
    },
  },

  watch: {
    addressSearch: _.debounce(function(addr) { this.getAddresses(addr) }, 500)
  }
}
</script>
