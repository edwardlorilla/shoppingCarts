<template>
    {{test}}
    <div>
        <form class="login-form">
            <input type="text"  v-model="login.email" placeholder="Email"/>
            <input type="password" v-model="login.password" placeholder="password"/>
            <button @click.prevent="loginSubmit" >login</button>
        </form>
    </div>
</template>
<style>

</style>
<script>
    import {getHeader} from './../../config';
    export default{
        data(){
            return{
                login:{
                    email:'edwardlorilla@gmail.com',
                    password:'edward'
                }
            }
        },
        methods:{
            loginSubmit(){
                const data = {
                grant_type: 'password',
                client_id:2,
                client_secret:'YgGHxKKlnxprj5yiFOdTkxaVjuhjnc2dlf4RGs0G',
                username: this.login.email,
                password:this.login.password,
                scope:''

                };
                const authUser = {}

                axios.post('/oauth/token', data)
                .then(response => {
                    if (response.status === 200) {
                      console.log('Oauth token', response)
                      authUser.access_token = response.data.access_token
                      authUser.refresh_token = response.data.refresh_token
                      window.localStorage.setItem('authUser', JSON.stringify(authUser))
                      axios.get('api/user', {headers: getHeader()})
                        .then(response => {
                          console.log('user object', response.data)
                          authUser.email = response.data.email
                          authUser.name = response.data.name
                          window.localStorage.setItem('authUser', JSON.stringify(authUser))
                          this.$router.push({name: 'dashboard'})
                        })
                    }

                })
                .catch (response => {
                    console.log(response)
                });
            }
        }

    }
</script>
