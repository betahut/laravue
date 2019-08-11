<template>
    <header class="bg-white border-b">
        <div class="container mx-auto">
            <div class="md:flex border-b border-gray-200">
                <div class="w-full md:w-1/4 flex items-center justify-between py-2 md:justify-start md:py-0 border-b md:border-none">
                    <div :class="'menu-cc burger-cc ml-1 md:hidden' + ((menuToggler) ? ' open' : '')" @click="toggleMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#" class="flex items-center"> <img :src="logo" alt="logo" class="w-10"> <p class="text-2xl font-semibold ml-1">{{ siteName }}</p> </a>
                    <a href="javascript:void(0);" class="mr-1 md:hidden" @click="logout"> <img class="w-8" :src="login" alt="logout-logo"> </a>
                </div>
                <div :class="'w-full md:w-2/4 md:flex md:justify-center' + ((!menuToggler) ? ' hidden' : '')">
                    <router-link to="/" :class="'flex md:mr-8 mx-3 md:mx-0 px-3 md:px-0 md:py-3 py-2 md:my-0 my-1' + ((routeName == 'home') ? ' md:text-gray-900 text-white font-semibold md:border-b-2 md:border-green-400 bg-green-400 rounded md:rounded-none md:bg-transparent' : ' text-gray-500')" @click.native="changeRoute('home')">Dashboard</router-link>
                    <router-link to="/manageftp" :class="'flex md:mr-8 mx-3 md:mx-0 px-3 md:px-0 md:py-3 py-2 md:my-0 my-1' + ((routeName == 'manageftp') ? ' md:text-gray-900 text-white font-semibold md:border-b-2 md:border-green-400 bg-green-400 rounded md:rounded-none md:bg-transparent' : ' text-gray-500')" @click.native="changeRoute('manageftp')">FTPs</router-link>
                    <a href="javascript:void(0);" class="flex md:mr-8 mx-3 md:mx-0 px-3 md:px-0 md:py-3 py-2 md:my-0 my-1 text-gray-500">Settings</a>
                    <a href="javascript:void(0);" class="flex md:mr-8 mx-3 md:mx-0 px-3 md:px-0 md:py-3 py-2 md:my-0 my-1 text-gray-500">About</a>
                </div>
                <div class="w-full md:w-1/4 md:text-right hidden md:block">
                    <a href="javascript:void(0);" class="flex md:inline-block mx-3 md:mx-0 px-3 md:px-0 md:py-3 py-2 md:my-0 my-1 text-gray-500" @click="logout">
                        <span class="flex items-center">
                            <img class="w-4" :src="login" alt="logout-logo">
                            <span class="ml-1">Logout</span>
                        </span>
                    </a>
                    <!-- <a href="#" class="inline-block mx-3 md:mx-0 px-3 md:px-0 md:py-3 py-2 md:my-0 my-1 text-gray-500">Register</a> -->
                </div>
            </div>
            <div :class="'w-full md:flex justify-between items-center py-2' + ((!menuToggler) ? ' hidden' : '')">
                <h1 class="text-xl hidden md:block">Dashboard - {{ routeName }}</h1>
                <div class="flex md:block mx-3 md:mx-0">
                    <input class="w-full md:w-auto apprearance-none border py-1 px-4 rounded" type="text" placeholder="Search for threads...">
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import { _siteName } from "../_constants";
import logo from '../../images/logo.png';
import login from '../../images/login.png';
import { mapGetters, mapActions } from 'vuex';

export default {
    data: function () { return { logo: logo, login: login, siteName: _siteName, routeName: (this.$route.name == 'signin') ? 'home' : this.$route.name, menuToggler: false } },
    updated: () => { return mapGetters(['auth']) },
    computed: { ...mapGetters(['auth']) },
    methods: { 
        ...mapActions(['logout']), 
        changeRoute(_name){ this.routeName = _name; }, 
        toggleMenu(){ this.menuToggler = !this.menuToggler } 
    }
}
</script>

