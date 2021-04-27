<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg" style="background-color: #ffd700;">
            <router-link :to="{ name: 'album.index' }" class="navbar-brand" style="color: #111111;" >Galeria de Esculturas</router-link>
            <button class="navbar-toggler"
                    style="color: #111111;"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-if="app.user" >
                        <router-link :to="{ name: 'album.index' }" class="nav-link" style="color: #111111;">Esculturas</router-link>
                    </li>

                    <li class="nav-item" v-if="app.user">
                        <router-link :to="{ name: 'album.create' }" class="nav-link" style="color: #111111;">Criar Album</router-link>
                    </li>

                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #111111;">
                            <span v-if="app.user">{{ app.user.name }}</span>
                            <span v-else>Account</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div v-if="!app.user">
                                <router-link :to="{ name: 'auth.login' }" class="dropdown-item">Login</router-link>
                                <router-link :to="{ name: 'auth.register' }" class="dropdown-item">Register</router-link>
                            </div>
                            <a href="javascript:void(0)" v-else class="dropdown-item" @click="logout">Logout</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
   name: 'navbar',
   props: ['app'],
   methods:{
       logout()
       {
           this.app.req.post('auth/logout').then(() => {
               this.app.user = null;
               this.$router.push({
                   name:'auth.login'
               })
           })
       }
   }
}
</script>

<style>

</style>
