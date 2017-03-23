<template>
    <div>
        <div class="cart-total">
            <span>Total</span>
            <span class="right">$ {{sum}}</span>
        </div>
        <div class="w3-content">
            <p class="cart-empty" v-if="total == 0">Your Shopping Cart is Empty!</p>
            <div v-else v-for="(item, index) in items" class="w3-row w3-margin">
                <ul class="w3-ul w3-card-4">
                    <li class="w3-padding-16">
                        <input class="w3-check w3-left w3-margin-right " @click="itemChecked(item)"
                               :value="item.price * item.qty" v-model="checked" type="checkbox">
                        <span @click="deleteItem(index)"
                              class="w3-button w3-white w3-xlarge w3-right">&times;</span>
                        <img :src="item.image" class="w3-left w3-circle w3-margin-right" style="width:50px;height:50px">
                        <label class="w3-validate w3-large " v-text="item.product"></label><br>
                        <span> x{{item.qty}}
                        $ {{item.qty * item.price}}</span>
                    </li>
                </ul>
            </div>
            <div class="w3-bar">
                <button class="w3-bar-item w3-button w3-indigo" style="width:100%" v-if="!isEmpty">ADD TO
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
                items: State.data.cart,
                item:{
                    completed:true
                },
                checked:[],
            }
        },
        computed: {
            sum(){
                let _this = this;
                return _.sum(_this.checked)
            },
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
            },
            itemChecked(item){
                if(typeof item.completed === 'undefined'){
                    this.$set(item, 'completed', true);
                }else {
                    item.completed = !item.completed
                }
            }
        }
    }



</script>
