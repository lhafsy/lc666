<template>
  <div id="lgy_Page">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'lgy_Page',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>
<style lang="scss">
	#lgy_Page{
		width: 100%;
	}
</style>