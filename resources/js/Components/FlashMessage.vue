<script setup>
</script>

<template>
  <div v-if="$page.props.flash.status === 'success'" class="bg-amber-400 text-white p-4 rounded-lg shadow-md mb-4 w-full">
    {{ $page.props.flash.message }}
  </div>
  <div v-if="$page.props.flash.status === 'danger'" class="bg-gray-400 text-white p-4 rounded-lg shadow-md mb-4 w-full">
    {{ $page.props.flash.message }}
  </div>
</template>