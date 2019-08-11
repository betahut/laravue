<template>
    <div class="container mx-auto">
        <div class="md:flex">
            <div class="flex md:w-1/4 md:mr-4 md:mb-0 mb-2 mr-2 md:ml-0 ml-2">
                <Alert color="green" bg="400" ibg="900" title="FTP's" :text="((list && !list.listLoading && list.list.length) || '0') + ' FTPs found.'" :img="ftp" />
            </div>
            <div class="flex md:w-1/4 md:mr-4 md:mb-0 mb-2 mr-2 md:ml-0 ml-2">
                <Alert color="red" bg="400" ibg="900" title="FTP's" :text="((list && !list.listLoading && list.list.length) || '0') + ' FTPs found.'" :img="ftp" />
            </div>
            <div class="flex md:w-1/4 md:mr-4 md:mb-0 mb-2 mr-2 md:ml-0 ml-2">
                <Alert color="blue" bg="400" ibg="900" title="FTP's" :text="((list && !list.listLoading && list.list.length) || '0') + ' FTPs found.'" :img="ftp" />
            </div>
            <div class="flex md:w-1/4 mr-2 md:ml-0 ml-2 md:mr-0">
                <Alert color="orange" bg="400" ibg="900" title="FTP's" :text="((list && !list.listLoading && list.list.length) || '0') + ' FTPs found.'" :img="ftp" />
            </div>
        </div>
            <!-- <FtpTable/> -->
        <div class="px-16" v-if="list && !list.listLoading && list.list.length === 0">
        </div>
        <div v-if="list && !list.listLoading && list.list.length > 0">
            List
        </div>
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import FtpAdd from "../../_components/FtpAdd";
import FtpTable from "../../_components/FtpTable";
import Alert from "../../_components/_tailwind/Alert";
import ftp from "../../../images/ftp-white.png";

export default {
    components: { FtpAdd, FtpTable, Alert },
    data: () => { return { ftp: ftp }; },
    computed: { ...mapGetters(['list']) },
    updated: () => { return { ...mapGetters(['list']) } },
    methods: { ...mapActions(['ftpList']) },
    created() { this.ftpList(); }
}
</script>
