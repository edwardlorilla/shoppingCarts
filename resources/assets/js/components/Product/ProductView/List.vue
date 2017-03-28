<template>
    <div>
        <div class="w3-row w3-margin">
            <div class="w3-third">
                <slot name="image"></slot>
                </div>
            <div class="w3-twothird w3-container">
                <h2><slot name="product"></slot></h2>
                <p>
                <slot name="detail"></slot>
                </p>
                <hr>
                <slot name="price"></slot>
                <slot name="quantity"></slot>
                <slot name="button"></slot>
                </div>
        </div>
    </div>
</template>