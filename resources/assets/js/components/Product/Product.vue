<template>
    <div>
            <div class="w3-card-4">
                <header class="w3-container">
                    <img :src="product.image ? product.image.file : '' " style="width:100%">
                </header>
                <div class="w3-container w3-white">

                    <h4>{{product.product}}</h4>
                    <p>{{product.details }}</p>
                    <hr>
                    <span>$ {{product.price}}</span>
                    <span  v-if="qtyInCart > 0">x{{qtyInCart}}</span>
                </div>
                <div class="w3-bar">
                    <button class="w3-bar-item w3-button w3-indigo" style="width:100%"  @click="addToCart" v-if="qtyInCart == 0">ADD TO
                        CART
                        </button>
                    <div v-else>
                        <button class="w3-bar-item w3-button w3-teal" style="width:50%" @click="inc">+</button>
                        <button class="w3-bar-item w3-button w3-red" style="width:50%" @click="dec">-</button>
                        </div>
                </div>
            </div>
    </div>
</template>
<style>

</style>
<script>
    import State from '../../shoppingCartState'
    export default{
        props: ['product'],
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
        computed: {
        qtyInCart () {
        // check for product in cart state
        var found = _.find(this.shared.cart, ['id', this.product.id])
                if(typeof found == 'object') {
                    return found.qty
                } else {
                    return 0
                }
            }
        }

    }
</script>
