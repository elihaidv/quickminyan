
<template>
  <div>
    <p>{{location.name}}</p>
    <p>{{location.city}}</p>
    <p>{{location.distance}}</p>
    <p>{{location.prayers}}</p>
  </div>
</template>
<script>
export default  {
    name: "LocationItem",
    props: [
        "location"
    ],
    mounted() {

    },
    data() {
      return {

      }
    },
    methods: {

    },
    computed: {

    }
}
</script>
<style>

</style>
