<template>
    <nav class="flex items-center justify-between flex-wrap p-2">
        <div class="flex items-center flex-shrink-0 w-1/6">
            <router-link class="flex" to="/">
                <img class="h-8 w-8 mr-2" :src="logo" :alt="`${siteName}-Logo`">
                <span class="font-semibold text-xl text-gray-800 tracking-tight hidden md:block lg:block">{{ siteName }}</span>
            </router-link>
        </div>
        <div class="w-4/6 flex items-center flex-shrink-0">
            <div class=" text-sm flex-grow" v-if="auth.isLoggedIn === true">
                <div class="w-full mx-auto">
                    <input id="docsearch" class="transition border border-transparent placeholder-gray-900 rounded-lg bg-gray-300 focus:bg-gray-200 py-2 pr-4 pl-4 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search the docs (Press &quot;/&quot; to focus)" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" />
                </div>
            </div>
        </div>
        <div class="w-1/6 flex justify-end flex-shrink-0">
            <router-link class="flex" to="/auth/signin" v-if="auth.isLoggedIn !== true">
                <img :src="login" alt="Login" class="h-8 w-8 ml-2">
                <span class="inline-block text-sm px-4 py-2 leading-none rounded text-gray hidden md:block lg:block">Sign In</span>
            </router-link>
            <router-link class="flex" to="/auth/signin" v-if="auth.isLoggedIn === true">
                <img :src="login" alt="Login" class="h-8 w-8 ml-2">
                <span class="inline-block text-sm px-4 py-2 leading-none rounded text-gray hidden md:block lg:block">Logout</span>
            </router-link>
        </div>
    </nav>
</template>

<script>
import { _siteName } from "../_constants";
import logo from '../../images/logo.svg';
import login from '../../images/login.svg';
import { mapGetters } from 'vuex';

export default {
    data: function () {
        return { logo: logo, login: login, siteName: _siteName }
    },
    updated: () => { return mapGetters(['auth']) },
    computed: { ...mapGetters(['auth']) },
}
</script>

