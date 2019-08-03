<template>
    <div>
        <Navbar />
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from "../_components/Navbar";
    export default {
        components: { Navbar }
    }
</script>
