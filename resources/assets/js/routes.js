/**
 * Created by Edward Lance Lorilla on 3/9/2017.
 */

import Home from './components/Home.vue';
import DashboardPage from './components/Dashboard/Dashboard.vue';
import CheckOut from './components/Product/CheckOut.vue';
import Signin from './components/Credential/Master.vue';

export default [
    {
        path: '/home',
        component: Home,
        name: 'home'
    },
    {
        path: '/checkout',
        component: CheckOut,
        name: 'checkout'
    },
    {
        path: '/signin',
        component: Signin,
        name: 'signin'
    },
    {
        path: '/dashboard',
        component: DashboardPage,
        name: 'dashboard',
        meta: {
            requiresAuth: true
        }
    }

]
