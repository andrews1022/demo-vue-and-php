<script setup lang="ts">
import { ref } from "vue";

const isTrue = ref(true);

const toggle = () => {
  isTrue.value = !isTrue.value;
};
</script>

<template>
  <section class="section">
    <div class="conditional-rendering">
      <h2>Conditional Rendering</h2>

      <div v-if="isTrue" :class="{ green: isTrue }">
        <h3>It's true!</h3>
      </div>

      <div v-else :class="{ red: !isTrue }">
        <h3>It's false!</h3>
      </div>

      <button @click="toggle">Toggle</button>
    </div>
  </section>
</template>

<style scoped>
.conditional-rendering {
  display: inline-block;
}

.green {
  background-color: lightgreen;
}

.red {
  background-color: lightcoral;
}
</style>
