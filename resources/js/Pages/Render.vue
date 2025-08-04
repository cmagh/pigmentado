<script setup>
import { reactive, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import _ from 'lodash'

defineProps({    
    name: {
        type: String,
        required: true,
    },
    test: {
        type: String,
    }
});

let arr = reactive([1,2,3,4,5,6,7,8]);

let chunk = computed(() => {
    return _.chunk(arr, 4)
})



</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <h1>{{ name }}</h1>  
        <h2>{{ test }}</h2>
        <pre>{{ chunk }}</pre>
        <Link href="/">Home</Link>
    
    </div>
</template>
