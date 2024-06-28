<script setup lang="ts">
type HelloWorldProps = { msg: string };

defineProps<{ message: string }>();
// or use defineProps<HelloWorldProps>();
</script>

<template>
  <section class="section">
    <h1 class="green">{{ message }}</h1>
    <h2>You've successfully created a project with Vite + Vue 3!</h2>
  </section>
</template>
