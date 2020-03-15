import Vue from 'vue'
import App from './App.vue'
import store from  './store';
import VueFab from 'vue-float-action-button'
import vuetify from './plugins/vuetify';
import 'vuetify/dist/vuetify.min.css'


Vue.config.productionTip = false
Vue.use(VueFab,  {
    iconType: 'MaterialDesign'
  } );

new Vue({
  render: h => h(App),
  store,
  vuetify
}).$mount('#app')
