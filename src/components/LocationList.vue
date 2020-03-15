
<template>
  <div >
     <LocationItem v-for="loc in locations" :key="loc.id" :location="loc"/>
              <v-dialog
      v-model="dialog"
      width="500"
    >
      <template v-slot:activator="{ on }">
                      <v-btn
                color="pink"
                dark
                absolute
                bottom
                left
                fab
                 v-on="on"
              >
                <v-icon>mdi-plus</v-icon>
              </v-btn>
      </template>
<AddLocation @add = "dialog=false"/>
    </v-dialog>

                </div>

</template>
<script>
import LocationItem from './LocationItem.vue';
import AddLocation from './AddLocation.vue';

AddLocation
export default  {
    name: "LocationList",
    components: {
        LocationItem, AddLocation
    },
    props: [],
    mounted() {

    },
    data() {
      return {
dialog: false
      }
    },
    methods: {

    },
    computed: {
        locations () {
            console.log(this.$store.getters);
            return this.$store.getters.locations;
        }
    }
}
</script>
<style>
</style>
