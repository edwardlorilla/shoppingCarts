// shopping cart state
export default {
    data: {
        cart:[

            ]
},
add (product) {
    var found = _.find(this.data.cart, ['id', product.id])
    if(typeof found != 'object') {
        this.data.cart.push({
            id: product.id,
            product: product.product,
            price: product.price,
            image: product.image.file,
            qty: 1
        })
    }
},
inc (product) {
    var found = _.find(this.data.cart, ['id', product.id])
    if(typeof found == 'object') {
        var index = _.indexOf(this.data.cart, found)
        this.data.cart[index].qty++
    }
},
dec (product) {
    console.log(product)
    var found = _.find(this.data.cart, ['id', product.id])
    if(typeof found == 'object') {
        var index = _.indexOf(this.data.cart, found)
        if(this.data.cart[index].qty == 1) {
            this.data.cart.splice(index, 1)
        } else {
            this.data.cart[index].qty--
        }
    }
},
    deleteItem (product) {
        var found = _.find(this.data.cart, ['id', product.id])
        if(typeof found == 'object') {
            var index = _.indexOf(this.data.cart, found)
            this.data.cart.splice(index, 1)
        }
    }

}