<template>
    <div>
        <!-- Sidebar -->
        <div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="width:25%; display:none;z-index:5"
             :style="sideBar ? mySidebar : sideClose">
                <div class="w3-container w3-dark-grey">
                    <h4>Menu</h4>
                </div>

                <img src="img_fjords.jpg" alt="Fjords">
                <a href="#" class="w3-bar-item w3-button w3-red">Home</a>
                <a href="#" class="w3-bar-item w3-button">Projects <span class="w3-tag w3-red w3-right w3-margin-right">8</span></a>
                <a href="#" class="w3-bar-item w3-button">About</a>
                <a href="#" class="w3-bar-item w3-button">Contact</a>

                <div class="w3-panel w3-blue-grey w3-display-container">
                    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-blue-grey w3-display-topright">&times;</span>
                    <p>Lorem ipsum box...</p>
                </div>
        </div>

        <!-- Overlay -->
        <!--<div class="w3-overlay w3-animate-opacity" @click="!sideBar"  :style="sideBar ? mySidebar : sideClose"-->
             <!--style="cursor:pointer"></div>-->
    </div>
</template>
<script>
    import {eventBus} from './../../app'
    export default{
        props: ['sideBar'],
        data(){
            return{

                mainStyle:{
                        marginLeft:"25%",
                        width: '25%'
                    },
                    mySidebar:{
                        display:"block"
                    },
                    sideClose:{

                        display:"none"
                    }
            }
        },
        methods:{
            w3_open(){
            }
        }

    }
</script>
