
<template>
      <v-card>
        <v-card-title
          class="headline grey lighten-2"
          primary-title
        >
          הוספת מנין
        </v-card-title>

        <v-card-text>
            <v-container>
                <v-row>
                             <v-col cols="12">
                <v-text-field label="שם המנין*" required></v-text-field>
                             </v-col>
                                                          <v-col cols="12">
              </v-col>
                </v-row>
            </v-container>
        </v-card-text>

        <v-divider></v-divider>

    <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="dialog = false">ביטול</v-btn>
          <v-btn color="blue darken-1" text @click="add">צור</v-btn>
        </v-card-actions>
      </v-card>
</template>
<script>
export default  {
    name: "AddLocation",
    props: [],
    mounted() {

    },
    data() {
      return {
          form: {}

      }
    },
    methods: {
        add(){
            this.$store.dispatch('addLocation', {location: this.form});
            this.$emit('add');
        }

    },
    computed: {

    }
}
</script>

<style>
</style>
