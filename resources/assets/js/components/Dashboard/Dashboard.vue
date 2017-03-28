<template>
    <div>
        <a class="fa fa-chevron-down"  @click="limitLength=products.length" ></a>

        <table class="w3-table">
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <product v-for="product in productLimit" :product="product"></product>
        </table>
    </div>
</template>
<style>

</style>
<script>
    import Product from './Product.vue';
    export default{
        data(){
            return{
                products:[],
                limitLength: 5
            }
        },
        created(){
            this.fetchProducts();
        },
        computed:{
            productLimit() {
                return this.products.slice(0, this.limitLength);
            }
        },
        components:{
            Product
        },
        methods:{
            fetchProducts(){
                axios.get('api/products').then(response => this.products = response.data.products)
            }
        }
    }

</script>
