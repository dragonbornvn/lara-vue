<template>
	<div class="container">
		<div class="navbar">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">My forum</a>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Link</a>
					</li>
				</ul>
			</div>
		</div>
		<breadcrumb :breadcrumb="breadcrumb"></breadcrumb>
		<router-view @update-breadcrumb="updateBreadcrumb"></router-view>
	</div>
</template>

<script type="text/javascript">
	import Breadcrumb from './smallcomponent/Breadcrumb.vue';
	export default {
		components: { Breadcrumb },
		data () {
			return {
				breadcrumb: []
			}
		},
		methods: {
			updateBreadcrumb (breadcrumb) {
				this.breadcrumb = breadcrumb
		}
	}
	};
</script>