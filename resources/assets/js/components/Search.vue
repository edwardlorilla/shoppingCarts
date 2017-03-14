<template>
    <div>
        <div class="w3-row w3-padding-8 w3-theme-d2 w3-xlarge">
            <div class="w3-quarter">
                <div class="w3-bar">
                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="w3-half">
                <input type="text" class="w3-amber w3-border-0 w3-padding" style="width:100%">
            </div>
            <div class="w3-quarter">
                <div class="w3-bar w3-xlarge">
                    <a href="#" class="w3-bar-item w3-button w3-left"><i class="fa fa-search"></i></a>
                    <router-link :to="{ name: 'checkout' }" class="w3-bar-item w3-button w3-right"><i class="fa fa-shopping-cart"></i></router-link>



                    </div>
                </div>
            </div>
        </div>
</template>
<style>

</style>
<script>
    export default{
        data(){
            return{
            }
        }
    }

</script>
