var Vue = require('vue');
var ajax = require('./ajax');
var sort = require('./sort');

Vue.use(require('vue-resource'));

new Vue({
    el: '#demoApp',

    methods: {
        sort: sort.doSort
    },

    data: {
        filterTerm: '',
        cervejarias: [],
        column: 'name',
        reverse: false
    },

    ready: ajax.getCervejarias
});