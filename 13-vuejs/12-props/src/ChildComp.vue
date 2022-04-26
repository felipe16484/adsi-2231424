<script>
export default {
  data() {
    return {
      sprite: '',
      sprites: [
        '../public/images/sprite00.svg',
        '../public/images/sprite01.svg',
        '../public/images/sprite02.svg',
        '../public/images/sprite03.svg',
        '../public/images/sprite04.svg',
        '../public/images/sprite05.svg',
        '../public/images/sprite06.svg'
      ],
      countErrors: 0,
      words: ['red', 'green', 'blue', 'yellow', 'orange'],
      letters: [
        'Q','W','E','R','T','Y','U','I','O','P',
        'A','S','D','F','G','H','J','K','L','Z',
        'X','C','V','B','N','M'
      ]     
    }
  },
  methods: {
    incrementErrors() {
      if(this.countErrors < 7){
        this.sprite = this.sprites[++this.countErrors]
      }else{
        alert('You are hanged!')
      }
    },
    randomWord() {
      let rnd = Math.floor(Math.random()* this.words.length)
      alert(this.words[rnd])
    },
    newGame() {
      this.sprite = this.sprites[this.countErrors]
      this.randomWord()
    }
  },
  mounted(){
    this.sprite = this.sprites[this.countErrors]
    this.randomWord()
  },
  props: {
    msg: String
  }
}
</script>

<template>
    <h2 class="mx-auto text-center font-medium text-2xl border-b-4 border-[#42b883] w-36">
        {{ msg || 'No props passed yet' }}
    </h2>
    <figure class="flex justify-center items-center mt-4">
      <img class="" :src="sprite" alt="">
    </figure>
    <section class="flex flex-wrap mx-8 mt-4 justify-center">
      <button v-for="letter in letters" class="flex justify-center items-center w-6 h-6 bg-white/70 m-1 p-2 rounded-md shadow-lg hover:scale-110 transition duration-200">{{letter}}</button>
    </section>
    <button @click="newGame()" class="bg-[#42b883] text-white mx-auto mt-4 py-2 px-10 flex rounded-full capitalize hover:scale-110 transition duration-200">New Game</button>
        
</template>