
<template>
  <div>
    <v-list-item>
      <v-list-item-avatar>{{location.hour}}</v-list-item-avatar>
      <v-list-item-content>
        <v-list-item-title v-text="location.name"></v-list-item-title>
        <v-list-item-subtitle><span>{{location.city}}</span></v-list-item-subtitle>
      </v-list-item-content>
      <v-list-item-content>
         <v-list-item-subtitle><span class="">{{location.prayers}}</span></v-list-item-subtitle>
      </v-list-item-content>
      <v-list-item-action>
       {{location.distance || "10"+ "מ' "}}
      </v-list-item-action>
    </v-list-item>
  </div>
</template>
<script>
export default {
  name: "LocationItem",
  props: ["location"],
  mounted() {},
  data() {
    return {};
  },
  methods: {},
  computed: {}
};
</script>
<style>
</style>
