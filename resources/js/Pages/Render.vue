<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({    
    name: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
      <h1>{{ name }}</h1>  
      
      <h2>esto es una prueba</h2>  
    </div>
</template>
