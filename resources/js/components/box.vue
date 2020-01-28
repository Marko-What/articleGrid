<template>
<div>


	<div class="labelTag">
		{{ label  }}
	</div><!-- end of labelTag -->	

		<img :class="boxClass" :src="boxImg" v-bind:id="imageId">	
	<div class="subtitle">
				{{ title }}
	</div><!-- end of subtitle -->



</div>
</template>
	



<script>
	
	

 export default {	
	
	data() {
		return {
				title:"",
				label:"",
				imageId:"",
	}
	},

	props:['box', 'boxClass'],

	created(){
				this.posodobi();
	},

	methods:{

			posodobi() { 
						
			/* box img fetch functionality*/
			this.boxNum = this.box.slice(-1);
			let ran = Math.random();

			this.boxImg = "/returnImage?img="+this.boxNum+"&changed="+ran;
			
			/* img tag setting id attribute value */
			 this.imageId = "c"+this.boxNum;	
		
      		/* article title fetch functionality*/
						
				let artTitle = "/artTitle?artiRef="+this.boxNum;
			
					fetch(artTitle, {
				      method: 'get',
				    })
				      .then(res => res.json())
				      .then(data => { 
								this.title = data['title'];
								this.label = data['label'];
						});
				
      },/* end of posodobi */

	
			
	}/* end of methods */



  }; /* end of export default */



</script>

