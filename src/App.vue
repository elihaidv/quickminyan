<template>
  <v-app>
       <v-app-bar
      color="deep-purple accent-4"
      dense
      dark
    >
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Quick Minyan</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-heart</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>


    </v-app-bar>
    <v-content>
      <LocationList/>
    </v-content>
  </v-app>
</template>

<script>
import LocationList from './components/LocationList';

export default {
  name: 'App',

  components: {
    LocationList,
  },

  data: () => ({
    //
  }),
};
</script>
