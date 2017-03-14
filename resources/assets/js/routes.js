/**
 * Created by Edward Lance Lorilla on 3/9/2017.
 */
import Home from './components/Home.vue';
import CheckOut from './components/Product/CheckOut.vue';
export default [
    {
        path: '/home',
        component: Home
    },
    {
        path: '/checkout',
        component: CheckOut,
        name: 'checkout'
    }
]
