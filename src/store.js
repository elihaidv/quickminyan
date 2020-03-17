import Vuex from 'vuex';
import Vue from 'vue'
import axios from 'axios';

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        locations: [],
        location: {},
        coordinates: {}
    },
    getters: {
        locations: state => state.locations,
        coordinates: state => state.coordinates
    },
    mutations: {
        setLocations: (state, locations) => state.locations = locations,
        setLocation: (state, location) => state.location = location,
        setCoordinates: (state, coordinates) => state.coordinates = coordinates,

    },
    actions: {
        addLocation({ commit, state }, location) {
            location.lat = state.coordinates.latitude;
            location.lng = state.coordinates.longitude;
            axios.post('api/locations', location)
                .then(res => commit("setLocation", res.data))
        }
    }

});



navigator.geolocation.getCurrentPosition(
    pos => {
        var coords = pos.coords;
        store.commit("setCoordinates", coords);
        axios.get('api/locations?lat=' + coords.latitude + "&lng=" + coords.longitude)
            .then(res => store.commit("setLocations", res.data));
        });

export default store;
