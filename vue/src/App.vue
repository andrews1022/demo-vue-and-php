<script setup lang="ts">
import HelloWorld from "./components/HelloWorld.vue";
import JsonPlaceholderButton from "./components/JsonPlaceholderButton.vue";
import ListRendering from "./components/ListRendering.vue";
import ConditionalRendering from "./components/ConditionalRendering.vue";

import "./assets/main.css";
import PhpButton from "./components/PhpButton.vue";
</script>

<template>
  <div class="wrapper">
    <HelloWorld message="You did it!" />

    <JsonPlaceholderButton />

    <PhpButton />

    <ListRendering />

    <ConditionalRendering />
  </div>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
