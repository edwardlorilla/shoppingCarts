<template>
    <tr>
        <td>{{product.product}}</td>
        <td>{{product.description}}</td>
        <td>{{product.price}}</td>
    </tr>
</template>

<script>

    export default{
        props: ['product']
    }

</script>
