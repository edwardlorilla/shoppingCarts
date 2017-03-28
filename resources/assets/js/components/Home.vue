<template>
    <div>
        <side-bar :sideBar="toggleSide"></side-bar>
        <div zclass="w3-main" :style="toggleSide ? toggleSidebar_open : toggleSidebar_close ">
            <search>
                <input type="text" v-model="filterKey" class="w3-amber w3-border-0 w3-padding" style="width:100%">
            </search>
            <!--<input type="text" v-model="filterKey" class="w3-amber w3-border-0 w3-padding" style="width:100%">-->
            <div class="w3-container w3-padding-32 w3-theme-d1">
                <h1>Products</h1>
            </div>
            <a class="list-icon" v-bind:class="{ 'active': layout == 'list'}" v-on:click="layout = 'list'">list</a>
            <a class="grid-icon" v-bind:class="{ 'active': layout == 'grid'}" v-on:click="layout = 'grid'">grid</a>
            <div :class="{'w3-row-padding w3-theme':layout == 'grid',  'w3-content': layout == 'list'}">
                <product v-for="product in filteredData
" :product="product" :class="{'w3-third w3-section':layout == 'grid' }" :layout="layout"></product>
            </div>
            <div class="shopping-cart">

            </div>
            <div class="w3-container w3-theme-d4">
                <p class="w3-large">Europe Italy</p>
            </div>
        </div>
    </div>
</template>
<style>

</style>
<script>
    import {eventBus} from './../app'
    import SideBar from './Partial/SideBar.vue';
    import Search from './Search.vue';
    import Product from './Product/Product.vue'
    export default{
        data(){
            return{
                products:[],
                sortKey: '',
                sortOrders: 1,
                filterKey:'',
                layout:'grid',
                toggleSide: false,
                toggleSidebar_open:{
                    marginLeft: '25%'
                },
                toggleSidebar_close:{
                    marginLeft:'0%'
                }
            }
        },
        created(){
            this.fetchProducts();
            eventBus.$on('toggleState', (toggle) =>{
                this.toggleSide = toggle
            })
        },
        computed: {
            filteredData(){
              var sortKey = this.sortKey
              var filterKey = this.filterKey && this.filterKey.toLowerCase()
              var order = this.sortOrders[sortKey] || 1
              var data = this.products
              if (filterKey) {
                data = data.filter(function (row) {
                  return Object.keys(row).some(function (key) {
                    return String(row[key]).toLowerCase().indexOf(filterKey) > -1
                  })
                })
              }
              if (sortKey) {
                data = data.slice().sort(function (a, b) {
                  a = a[sortKey]
                  b = b[sortKey]
                  return (a === b ? 0 : a > b ? 1 : -1) * order
                })
              }
              return data
          }
        },
        methods:{
            fetchProducts(){
                axios.get('api/products').then(response => this.products = response.data.products)
            }
        },
         components: {
            Product, Search, 'side-bar':SideBar
         }

    }






</script>
