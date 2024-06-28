<script setup lang="ts">
import { ref } from "vue";

type JsonResponse = {
  message: string;
};

const stateData = ref<JsonResponse>({ message: "" });

const phpButton = async () => {
  const response = await fetch("http://localhost:8000");
  const data: JsonResponse = await response.json();

  stateData.value = data;
};
</script>

<template>
  <section class="section">
    <button @click="phpButton">PHP</button>

    <!-- render the stateData if there is a value inside a pre tag -->
    <pre v-if="stateData.message">{{ stateData.message }}</pre>
  </section>
</template>
