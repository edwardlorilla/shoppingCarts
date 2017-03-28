<template>
    <div>
       <div class="w3-card-4">
           <header class="w3-container">
               <slot name="image"></slot>
               </header>
           <div class="w3-container w3-white">
               <slot name="product"></slot>
               <slot name="detail"></slot>
               <hr>
               <slot name="price"></slot>
               <slot name="quantity"></slot>
               </div>
           <slot name="button"></slot>
       </div>
    </div>
</template>