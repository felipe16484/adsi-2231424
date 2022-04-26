<script>
import ChildComp from './ChildComp.vue'

export default {
  components: {
    ChildComp
  },
  data() {
    return {
      title: '12 - Props',
      greeting: 'Hangman'
    }
  }
}
</script>

<template>

  <svg class="h-28 w-28 mx-auto my-6" viewBox="0 0 128 128" width="24" height="24" data-v-5f26462c="">
    <path fill="#42b883" d="M78.8,10L64,35.4L49.2,10H0l64,110l64-110C128,10,78.8,10,78.8,10z" data-v-5f26462c=""></path>
    <path fill="#35495e" d="M78.8,10L64,35.4L49.2,10H25.6L64,76l38.4-66H78.8z" data-v-5f26462c=""></path>
  </svg>

  <h1 class="text-center my-4 text-3xl font-semibold bg-gradient-to-t from-[#34495E] to-[#41B883] bg-clip-text text-transparent mb-6">{{title}}</h1>

  <ChildComp :msg="greeting"/>

</template>