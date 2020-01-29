<template>
  <div id="app">

    <img v-if="info < 200" src="../img/gamellevide.jpg" alt="gamelle vide">
    <img v-if="info > 200" src="../img/gamellepleine.jpg" alt="gamelle pleine">

  </div>
</template>

<script>
export default {
  data () {
    return {
      info: null
    }
  },
  mounted () {
    // eslint-disable-next-line
      this.axios
      .get('https://localhost:8443/bowls/2')
      .then(response => (this.info = response.data.waterLevel))
      .catch(error => console.log(error))
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
