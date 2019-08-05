<template>
    <div class="my-10 w-full flex content-center"> <span class="mx-auto">_DATSH_</span> </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
    methods: { ...mapActions(['ftpList']) },
    created() {
        console.log(this.ftpList());
    }
}
</script>
