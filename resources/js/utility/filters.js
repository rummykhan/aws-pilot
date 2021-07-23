import Vue from "vue"
const voca = require('voca');

Vue.filter('capitalize', function (value) {
  if (!value)
    return ''
  value = value.toString()
  value = value.toLowerCase()
  return value.charAt(0).toUpperCase() + value.slice(1)
})
