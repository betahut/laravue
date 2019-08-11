<template>
    <div class="w-full max-w-xs mx-auto mt-32">
        <span class="text-md text-gray-800 block mb-2 flex items-center justify-center">
            <img :src="logo" alt="login-logo" class="w-8">
            <span class="ml-1 font-semibold text-3xl">{{ siteName }}</span>
        </span>
        <div class="w-full py-6 px-6 bg-white rounded shadow">
            <form @submit="formSubmit">
                <div class="bg-white text-center mb-4" v-if="error || (auth && auth.error)">
                    <div class="p-2 bg-red-800 items-center text-red-100 leading-none rounded-full flex inline-flex w-full" role="alert">
                        <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                        <span class="font-normal mr-2 text-left flex-auto">{{ auth && auth.error && "Invalid Credentials." || error }}</span>
                        <a href="javascript:void(0);" @click="clearError"> <img :src="close" alt="close-icon" class="h-3" /> </a>
                    </div>
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-300 text-gray-700 leading-tight focus:bg-gray-100" id="email" type="email" placeholder="Email" v-model="email">
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-300 text-gray-700 leading-tight focus:bg-gray-100" id="password" type="password" placeholder="Password" v-model="password">
                    <p class="text-red-500 text-xs italic hidden">Please choose a password.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button :class="'bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded w-full'+ ((auth && auth.isLoading) ? ' is-loading' : '')" type="submit"> Sign In </button>
                </div>
            </form>
        </div>
        <p class="text-center text-gray-500 text-xs mt-2">
            &copy;2019 {{ siteName }}. All rights reserved.
        </p>
    </div>
</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
import { _siteName, _emailRegex } from "../../_constants";
import { regexCheck } from "../../_functions";
import close from "../../../images/close.png";
import logo from "../../../images/logo.png";

export default {
    data: () => { return { siteName: _siteName, email: null, password: null, error: null, close: close, logo: logo } },
    updated: () => { return mapGetters(['auth']) },
    computed: { ...mapGetters(['auth']) },
    methods: {
        ...mapMutations({ loginMutation: 'login' }),
        ...mapActions(['login']),
        clearError: function (e) { this.loginMutation({ isLoading: false, isLoggedIn: false }); this.error = null; },
        formSubmit: function(e) {
            e.preventDefault();
            this.error = "";
            if(this.email && this.password){
                if(regexCheck(this.email, _emailRegex)){
                    this.login({ email: this.email, password: this.password }).then(() => {
                        if(this.auth && this.auth.isLoggedIn){
                            this.$router.push('/');
                        }
                    });
                }else
                    this.error = "Invalid Email Format.";
            }else{
                if(!this.email)
                    this.error = "Email is Required.";
                else if(!this.password)
                    this.error = "Password is Required.";
            }
        }
    }
}
</script>
