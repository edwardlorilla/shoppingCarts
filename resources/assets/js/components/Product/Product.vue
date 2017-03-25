<template>
    <div>



            <component :is="layout">
                <img slot="image" :src="product.image ? product.image.file : '' " style="width:100%">
                <h4 slot="product">{{product.product}}</h4>
                <p slot="detail">{{product.details }}</p>
                <span slot="price">$ {{product.price}}</span>
                <span slot="quantity" v-if="qtyInCart > 0">x{{qtyInCart}}</span>
                <div slot="button" class="w3-bar">
                    <button class="w3-bar-item w3-button w3-indigo" style="width:100%" @click="addToCart"
                            v-if="qtyInCart == 0">ADD TO
                        CART
                    </button>
                    <div v-else>
                        <button class="w3-bar-item w3-button w3-teal" style="width:50%" @click="inc">+</button>
                        <button class="w3-bar-item w3-button w3-red" style="width:50%" @click="dec">-</button>
                    </div>
                </div>
            </component>

    </div>
</template>
<style>

</style>
<script>
    import Grid from './ProductView/Grid.vue';
    import List from './ProductView/List.vue';
    import State from '../../shoppingCartState'
    export default{
        props: ['product', 'layout'],
        data(){
            return{
                shared: State.data
            }
        },
        methods: {
            addToCart () {
                State.add(this.product)
            },
            inc () {
                State.inc(this.product)
            },
            dec () {
                State.dec(this.product)
            }
        },
        components:{
            'grid':Grid,
            'list':List
        },
        computed: {
            qtyInCart (){
                var found = _.find(this.shared.cart, ['id', this.product.id])
                if(typeof found == 'object') {
                    return found.qty
                } else {
                    return 0
                }
            },

        }

    }

</script>
