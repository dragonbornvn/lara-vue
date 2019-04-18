<template>
	<div>
		<category v-for="category in categories" :category="category" :key="category.id"></category>
	</div>
</template>

<script type="text/javascript">
import Category from '../app/Category.vue';
export default
{
	components: { Category },
	
	data() {
		return {
			categories:{}
		}
	},
	mounted () {
		axios.get('api/categories').then((response) => {
	        this.categories = response.data;
	    })
	    let breadcrumb = [{
	    	name: 'Categories',
	    	link: '/'
	    }]
	    this.$emit('update-breadcrumb', breadcrumb)
	}

}
</script>