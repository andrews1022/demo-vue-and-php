<script setup lang="ts">
type User = {
  id: number;
  name: string;
  username: string;
  email: string;
  address: Address;
  phone: string;
  website: string;
  company: Company;
};

type Address = {
  street: string;
  suite: string;
  city: string;
  zipcode: string;
  geo: Geo;
};

type Geo = {
  lat: string;
  lng: string;
};

type Company = {
  name: string;
  catchPhrase: string;
  bs: string;
};

import { ref } from "vue";

// create a 'users' ref, which is an array of User objects
const users = ref<User[]>([]);

const showAlert = () => {
  alert("Woot");
};

const getDataFromJsonPlaceholder = async () => {
  const response = await fetch("https://jsonplaceholder.typicode.com/users");
  const data: User[] = await response.json();

  users.value = data;
};
</script>

<template>
  <section class="section">
    <h2>Buttons / Events</h2>
    <button class="php-button" @click="showAlert" type="button">Simple Alert</button>

    <br />
    <br />
    <br />

    <button class="php-button" @click="getDataFromJsonPlaceholder" type="button">
      Get JSON Placeholder Data
    </button>

    <!-- render an unordered list of users, if there are any -->
    <ul v-if="users.length">
      <li v-for="user in users" :key="user.id">
        <h3>{{ user.name }}</h3>
        <p>{{ user.email }}</p>
      </li>
    </ul>
  </section>
</template>
