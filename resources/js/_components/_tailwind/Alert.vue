<template>
    <div :class="'mx-auto w-full items-center rounded-lg shadow-lg flex bg-'+color+'-'+bg+' p-4 text-white'">
        <div class="w-full">
            <h4 class="mb-2">{{title}}</h4>
            <p>{{text}}</p>
        </div>
        <div class="w-12">
            <div :class="'p-2 bg-'+color+'-'+ibg+' rounded-full'">
                <img :src="img" class="w-8 mx-auto">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['color', 'bg', 'ibg', 'title', 'text', 'img']
}
</script>
