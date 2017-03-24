<template>
    <div>
        <!--<input type="text" v-model="filterKey" class="w3-amber w3-border-0 w3-padding" style="width:100%">-->
        <search>
            <input type="text" v-model="filterKey" class="w3-amber w3-border-0 w3-padding" style="width:100%">
        </search>
        <div class="w3-container w3-padding-32 w3-theme-d1">
            <h1>Products</h1>
        </div>
        <div class="w3-row-padding w3-theme">
            <product v-for="product in filteredData
" :product="product" class="w3-third w3-section"></product>
        </div>
        <div class="shopping-cart">

        </div>
        <div class="w3-container w3-theme-d4">
            <p class="w3-large">Europe Italy</p>
        </div>

    </div>
</template>
<style>

</style>
<script>
    import Search from './Search.vue';
    import Product from './Product/Product.vue'
    export default{
        data(){
            return{
                products:[],
                sortKey: '',
                sortOrders: 1,
                filterKey:''
            }
        },
        created(){
            this.fetchProducts();
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
            Product, Search
         }

    }

</script>
