<template>
	<div id="root">
		<h1>
			SPA-FORUM <small> với Laravel + Vue.js</small>
		</h1>
		<breadcrumb :breadcrumb="breadcrumb"></breadcrumb>
		<router-view></router-view>
	</div>
</template>

<script type="text/javascript">
	import Breadcrumb from '.smallcomponent/Breadcrumb.vue';
	export default {
		components: { Breadcrumb },
		data () {
			return {
				breadcrumb: []
			}
		}
	}
</script>