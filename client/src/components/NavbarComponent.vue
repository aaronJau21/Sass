<script setup lang="ts">
import { ref } from 'vue'

const down = ref(false)

const show = () => {
  down.value = !down.value
}
</script>

<template>
  <div class="flex justify-between p-5 bg-blue-500 text-white">
    <nav class="flex gap-3">
      <RouterLink :to="{ name: 'home' }" class="hover:text-gray-300">iVideo</RouterLink>
      <RouterLink :to="{ name: 'video' }" class="hover:text-gray-300">Mis videos</RouterLink>
      <RouterLink :to="{ name: 'planes' }" class="hover:text-gray-300">Planes</RouterLink>
    </nav>
    <nav class="flex gap-3" @click="show">
      <div class="relative">
        <p class="flex gap-1 cursor-pointer">
          Jonathan
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
        </p>
        <div v-if="down" class="text-black flex flex-col absolute bg-white shadow-xl w-32 p-3 rounded-lg">
          <RouterLink :to="{ name: 'perfil' }">Perfil</RouterLink>
          <RouterLink :to="{ name: 'perfil' }">Cerrar Sesion</RouterLink>
        </div>
      </div>
      <RouterLink :to="{ name: 'login' }" class="hover:text-gray-300">Iniciar Sesión</RouterLink>
      <RouterLink :to="{ name: 'register' }" class="hover:text-gray-300">Crear cuenta</RouterLink>
    </nav>
  </div>
</template>

<style scoped>
.router-link-active {
  color: rgb(192, 187, 187);
}
</style>
