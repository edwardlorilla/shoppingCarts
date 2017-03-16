<template>
    <div>
        <div class="cart-total">
            <span>Total</span>
            <span class="right">$ {{total}}</span>
        </div>
        <div class="w3-content">
            <p class="cart-empty" v-if="total == 0">Your Shopping Cart is Empty!</p>
            <div v-else v-for="item in items" class="w3-row w3-margin">
                <ul class="w3-ul w3-card-4">
                    <li class="w3-padding-16">
                    <span onclick="this.parentElement.style.display='none'"
                          class="w3-closebtn w3-padding w3-margin-right w3-medium">&times;</span>
                        <img :src="item.image" class="w3-left  w3-margin-right" style="width:10%">
                        <span class="w3-xlarge">{{item.product}}</span><br>
                        <span>
                        x{{item.qty}}
                        $ {{item.qty * item.price}}
                        </span>
                    </li>
                </ul>
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
            }
        }
    }

</script>
