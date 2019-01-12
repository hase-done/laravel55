
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// import Vue from 'vue'
// import VueRouter from 'vue-router'

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// Vue.component('compare-component', {
// template: '<p>this is compare component</p>'
// })

// Vue.component('compare-component', {
//   template:
//   `<ul class="compare_list">
//     <li v-for="(cardName, cardId, idx) in this.compare_list">
//       @{{ cardName }} @{{ cardId }} @{{ idx }}
//     </li>
//   </ul>
//   `,
// })

// Vue.component('compare-component', {
//   template:
//   `<ul class="compare_list">
//     {{ name }}
//   </ul>
//   `,
//   data: ()=> {
//     return {
//       name: this.message
//     }
//   },
// })

const CompareComp = {
  props: ['compare_list'],
  template:
  `<ul class="compare_list">
    <li v-for="card in compare_list">
      <a :href="'/cards/show/' + card.id">
      {{ card.name }}
      <img v-if="card.image" :src="'/storage/card_images/' + card.image" class="card_image">
      <img v-else src="/storage/card_images/noimage.png" class="card_image">
      </a>
    </li>
  </ul>
  `
}
      // <img v-if="card.image" src="/storage/card_images/{{ card.image }}">
      // <img v-else src="/storage/card_images/noimage.png">


var app = new Vue({
  el: '#item_list',
  data: {
    compare_list: [],
    message: 'this is message'
  },
  methods: {
    intoCompareList: function(cardId, cardName, cardImage) {
      this.compare_list.push({
        id: cardId,
        name: cardName,
        image: cardImage,
      })
      // this.compare_list[cardId] = cardName
      console.log(this.compare_list)
      this.message = cardName + '追加'
    }
  },
  components: {
    'compare-component': CompareComp
  }
})
