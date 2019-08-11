<template>
    <div>
        <Navbar v-if="auth && auth.isLoggedIn" />
        <div class="py-2">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import Navbar from "../_components/Navbar";
    import { mapGetters } from 'vuex';

    export default {
        components: { Navbar },
        updated: () => { return mapGetters(['auth']) },
        computed: { ...mapGetters(['auth']) },
    }
</script>
