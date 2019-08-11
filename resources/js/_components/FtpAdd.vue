<template>
    <div class="max-w-full w-full mx-auto mx-5 mt-5 mb-5">
        <div class="border border-purple-400 bg-purple-400 rounded p-4 flex justify-between leading-normal flex items-center">
            <div class="flex-col w-1/6">
            <img :src="ftp" class="h-16 w-16" alt="ftp-icon">
            </div>
            <div class="flex-col w-5/6">
                <div class="text-purple-900 font-bold text-xl mb-2">Add FTP to see more cool stuff.</div>
                <form class="px-0" @submit="formSubmit">
                    <!-- <div class="bg-white text-center mb-4" v-if="error || (auth && auth.error)">
                        <div class="p-2 bg-red-800 items-center text-red-100 leading-none rounded-full flex inline-flex w-full" role="alert">
                            <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                            <span class="font-normal mr-2 text-left flex-auto">{{ auth && auth.error && "Invalid Credentials." || error }}</span>
                            <a href="javascript:void(0);" @click="clearError"> <img :src="close" alt="close-icon" class="h-3" /> </a>
                        </div>
                    </div> -->
                    <div class="w-full lg:flex md:flex block">
                        <div class="w-full md:w-1/2 lg:flex block md:mr-1">
                            <input class="w-full lg:w-2/4 mb-2 lg:mb-0 shadow appearance-none border rounded py-1 px-2 bg-gray-300 text-gray-700 leading-tight focus:bg-gray-100 mr-0 md:mr-2 lg:mr-2" id="email" type="email" placeholder="Email" v-model="email">
                            <input class="w-full lg:w-2/4 mb-2 lg:mb-0 shadow appearance-none border rounded py-1 px-2 bg-gray-300 text-gray-700 leading-tight focus:bg-gray-100 mr-0" id="email" type="email" placeholder="Email" v-model="email">
                        </div>
                        <div class="w-full md:w-1/2 lg:flex block md:ml-1">
                            <input class="w-full lg:w-2/4 mb-2 lg:mb-0 shadow appearance-none border rounded py-1 px-2 bg-gray-300 text-gray-700 leading-tight focus:bg-gray-100 mr-0 md:mr-2 lg:mr-2" id="email" type="email" placeholder="Email" v-model="email">
                            <input class="w-full lg:w-2/4 mb-2 lg:mb-0 shadow appearance-none border rounded py-1 px-2 bg-gray-300 text-gray-700 leading-tight focus:bg-gray-100" id="email" type="email" placeholder="Email" v-model="email">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import ftp from "../../images/ftp.png";
export default {
    data() { return { email: null, ftp: ftp }; },
    methods: {
        formSubmit: (e) => {
            console.log(e);
        }
    }
}
</script>
