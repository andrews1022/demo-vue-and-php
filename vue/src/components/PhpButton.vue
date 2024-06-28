<script setup lang="ts">
const phpButton = async () => {
  const response = await fetch("http://localhost:8000");
  const data = await response.json();
  console.log("data: ", data);
};
</script>

<template>
  <section class="section">
    <button @click="phpButton">PHP</button>
  </section>
</template>
