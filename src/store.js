import Vuex from 'vuex';
import Vue from 'vue'
import axios from 'axios';

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
      locations: [],
      location: {}
    },
    getters: {
        locations: state => state.locations
    },
    mutations: {
        setLocations: (state,locations) => { state.locations = locations; console.log(locations)},
        setLocation: (state,location) => { state.location = location; console.log(location)}

    },
    actions:{
        addLocation({ commit }, location){
            axios.post('api/locations', location)
            .then(res => commit("setLocation", res.data))
        }
    }

  });

axios.get('api/locations')
    .then(res => store.commit("setLocations", res.data));

  export default store;
