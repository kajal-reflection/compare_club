<template>
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Candidates</div>

                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</template>
<script>
import {mapGetters, mapActions, mapState} from "vuex";
import draggable from 'vuedraggable'
export default {
  components: {
    draggable
  },
  data() {
    return {
    };
  },
  mounted() {
    this.getCandidates();
  },
  computed: {
    candidates() {
      this.$store.state.candidates.candidates;
    },
    myList:{
      get() {
        return this.$store.state.candidates.candidates;
      },
      set(value) {
        this.$store.commit('candidate/setList', value);
      }
    }
  },
  methods: {
    getCandidates() {
      let comp = this;
      $.ajax({
        url: "/api/users",
        type: "get",
        data: {
          _token: this.csrf,
        },
        success: function (response) {
            comp.candidates = response;
            comp.$store.dispatch('candidates/setCandidates', response.users);
        },
      });
    },
  },
};
</script>