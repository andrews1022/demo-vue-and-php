<script setup lang="ts">
import { ref } from "vue";
const items = ref([{ message: "Foo" }, { message: "Bar" }]);
</script>

<template>
  <section class="section">
    <h2>List Rendering</h2>

    <ul>
      <li v-for="item in items" :key="item.message">{{ item.message }}</li>
    </ul>
  </section>
</template>
