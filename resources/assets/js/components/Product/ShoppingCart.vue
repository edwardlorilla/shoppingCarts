<template>
    <div>
        <div class="cart-total">
            <span>Total</span>
            <span class="right">$ {{total}}</span>
        </div>
        <div class="w3-content">
            <p class="cart-empty" v-if="total == 0">Your Shopping Cart is Empty!</p>
            <div v-else v-for="(item, index) in items" class="w3-row w3-margin">
                <ul class="w3-ul w3-card-4">
                    <li class="w3-padding-16">
    <span @click = "deleteItem(index)"
          class="w3-button w3-white w3-xlarge w3-right">&times;</span>
                        <img :src="item.image" class="w3-left w3-circle w3-margin-right" style="width:50px">
                        <span class="w3-large" v-text="item.product"></span><br>
                        <span> x{{item.qty}}
                        $ {{item.qty * item.price}}</span>
                    </li>
                </ul>







            </div>
            <div class="w3-bar">
                <button class="w3-bar-item w3-button w3-indigo" style="width:100%" v-if="!isEmpty"   >ADD TO
                    CART
                </button>

            </div>

        </div>
    </div>
</template>

<script>
   import State from '../../shoppingCartState'
    export default{
        data(){
            return{
                items: State.data.cart
            }
        },
        computed: {
            total () {
                    return _.sumBy(this.items, function(item) {
                        return (item.price * item.qty)
                })
            },
            isEmpty(){
                return _.isEmpty(this.items)
            }

        },
        methods:{
            deleteItem(index){
                console.log(index)
                State.deleteItem(this.items[index])
            }
        }
    }

</script>
