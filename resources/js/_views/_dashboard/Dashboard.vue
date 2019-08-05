<template>
    <div class="mt-25 mx-auto">
        <span v-if="list && !list.listLoading && list.list.length === 0">
            Add FTP
        </span>
        <span v-if="list && !list.listLoading && list.list.length > 0">
            List
        </span>
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
    data: () => { return {}; },
    computed: { ...mapGetters(['list']) },
    updated: () => { return { ...mapGetters(['list']) } },
    methods: { ...mapActions(['ftpList']) },
    created() { console.log(this.$store); this.ftpList(); }
}
</script>
