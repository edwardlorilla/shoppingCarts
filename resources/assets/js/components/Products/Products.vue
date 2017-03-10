<template>
    <div>

        <h1>Products</h1>
        <div class='products'>
            <div v-for='product in productsData' >

                    <div
                         :style="{'background-image': 'url('+ product.image +')' }"
                         style='background-position: center;'></div>

                    <div class='name'>{{ product.product }}</div>
                    <div class='description'>{{ product.description }}</div>
                    <div class='price'>{{ product.price  }}</div>
                    <button @click='addToCart(product)'>Add to Cart</button>
                    <br><br>
            </div>

            <div class='modalWrapper' v-show='showModal'>
                <div class='prevProduct' @click='changeProductInModal(prev)'><i class='fa fa-angle-left'></i></div>
                <div class='prevProduct' @click='changeProductInModal(prev)'><i class='fa fa-angle-left'></i></div>
                <div class='nextProduct' @click='changeProductInModal(next)'><i class='fa fa-angle-right'></i></div>
                <div class='nextProduct' @click='changeProductInModal(next)'><i class='fa fa-angle-right'></i></div>
                <div class='overlay' @click='hideModal()'></div>
                <div class='modal'>
                    <i class='close fa fa-times' @click='hideModal()'></i>
                    <div class='imageWrapper'>
                        <div class='image' :style="{backgroundImage: 'url(' +  modalData.image + ')'} "
                             style='background-size: cover; background-position: center;'
                             v-on:mouseover='imageMouseOver($event)' v-on:mousemove='imageMouseMove($event)'
                             v-on:mouseout='imageMouseOut($event)'></div>
                    </div>
                    <div class='imageWrapper'>
                        <div class='image' :style="{backgroundImage: 'url(' +  modalData.image + ')' }"
                             style='background-size: cover; background-position: center;'
                             v-on:mouseover='imageMouseOver($event)' v-on:mousemove='imageMouseMove($event)'
                             v-on:mouseout='imageMouseOut($event)'></div>
                    </div>
                    <div class='additionalImages' v-if='modalData.images'>
                        <div v-for='image in modalData.images' class='additionalImage'
                             :style="{backgroundImage: 'url(' + image.image + ')' }"
                             style='background-size: cover; background-position: center;'
                             @click='changeImage(image.image)'></div>
                        <div v-for='image in modalData.images' class='additionalImage'
                             :style="{backgroundImage: 'url(' + image.image + ')' }"
                             style='background-size: cover; background-position: center;'
                             @click='changeImage(image.image)'></div>
                    </div>

                    <div class='name'>{{ modalData.product }}</div>
                    <div class='description'>{{ modalData.description }}</div>
                    <div class='details'>{{ modalData.details }}</div>
                    <h3 class='price'>{{ modalData.price  }}</h3>
                    <label for='modalAmount'>QTY</label>
                    <input id='modalAmount' :value=' modalAmount' v-model='modalAmount' class='amount'
                           @keyup.enter='modalAddToCart(modalData), hideModal()'/>
                    <input id='modalAmount' :value='modalAmount ' v-model='modalAmount' class='amount'
                           @keyup.enter='modalAddToCart(modalData), hideModal()'/>
                    <button @click='modalAddToCart(modalData), hideModal()'>Add to Cart</button>
                </div>
            </div>
        </div>
        </div>

</template>
<style>

</style>
<script>

    export default{
        props: ['productsData', 'cart', 'tax', 'cartSubTotal', 'cartTotal'],
        data(){
            return{
                showModal: false,
                  modalData: {},
                  modalAmount: 1,
                  timeout: "",
                  mousestop: ""
            }
        },
        created: function () {

          },

        components:{

        }
    }

</script>
