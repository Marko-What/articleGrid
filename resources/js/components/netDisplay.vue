<template>





				<!-- .netDisplay -->
    <div class="container col-sm-12">


<!-- Modal --><!-- select mreza modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izbira predloge izpisa</h5>
       
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


				<div class="row col-sm-12 mrezaSelect">       
		
						<div class="mri col-sm-4 rounded" v-on:click='clickMri("a")' id="a">
							
						
							<img src="/mri/grid1.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->
			
						<div class="mri col-sm-4" v-on:click='clickMri("b")' id="b">
						
							<img src="/mri/grid2.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->

						<div class="mri col-sm-4" v-on:click='clickMri("c")' id="c">

						
							<img src="/mri/grid3.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->


						<div class="mri col-sm-4" v-on:click='clickMri("d")' id="d">
						
							<img src="/mri/grid4.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->
			
						<div class="mri col-sm-4" v-on:click='clickMri("e")' id="e">
						
							<img src="/mri/grid5.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->

						<div class="mri col-sm-4" v-on:click='clickMri("f")' id="f">
						
							<img src="/mri/grid6.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->			
   
								
						<div class="mri col-sm-4" v-on:click='clickMri("g")' id="g">
						
						 <img src="/mri/grid7.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->
			
						<div class="mri col-sm-4" v-on:click='clickMri("h")' id="h">
						
						 <img src="/mri/grid8.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->

						<div class="mri col-sm-4" v-on:click='clickMri("i")' id="i">
						
						 <img src="/mri/grid9.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->

			    
								
						<div class="mri col-sm-4" v-on:click='clickMri("j")' id="j">
						
							<img src="/mri/grid10.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->
			
						<div class="mri col-sm-4" v-on:click='clickMri("k")' id="k">
						
							<img src="/mri/grid11.jpeg" class="imageTagNormal">
						</div><!-- end of mri -->


				</div><!-- end of row -->



      </div><!-- end of modal body -->



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" v-on:click='closeIzbira()'>Close</button>
        <button type="button" class="btn btn-primary" v-on:click='posodobi()'>Posodobi</button>
      </div>

    </div>
  </div>
</div>

<!-- end of select mreza modal-->
















<!-- Modal --><!--  change box content modal -->
<div class="modal fade" id="izbMrez" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izbira vsebine mrezka</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
					<b> Izbrani mrezek</b>
					<div class="boxIz" v-model="stevilkaMrezka" > {{ stevilkaMrezka }} </div>
					<b> Izberi vsebino</b>
					<!-- 	<v-select v-model="selected" :options="'{{ clanki }}'"></v-select> v-for="aStaff in staff" :value="aStaff.id"-->
					<!-- <v-select v-model="selected" :options="['1', '5', '2' ,'3']" ></v-select>-->
					<v-select v-model="selected" v-bind:options="clanki"></v-select>
					  
					<!-- end of modal body -->



      </div><!-- end of modal body -->



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" v-on:click='posodobiVsebino()'>Posodobi Clanek</button>
      </div>

    </div>
  </div>
</div>

<!-- end of select change box content modal-->







     
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" v-if="userId">
			Launch demo modal
		</button>





			<div id="net" v-show="mrezaState.a">




				
			 <div class="row col-sm-12">
	

			<!-- box1-->	
						<div class="box col-sm-3"  v-on:click='changeArticle("box1")'>
												<box :boxClass="carClass.a" :box="boxes.a" ref="boxaa" :key="componentKey"></box>		
						</div><!-- end of col -->	

			<!-- end of box1 -->	






		 <!-- box2-->	
						<div class="box col-sm-6 boxAcol6" v-on:click='changeArticle("box2")'>
											<box  :boxClass="carClass.a" :box="boxes.b" ref="boxba" :key="componentKey"></box>	
						</div><!-- end of col -->	
		
		<!-- end of box2 -->





 			<!-- box3-->	
						<div class="box col-sm-3" v-on:click='changeArticle("box3")'>
								<box  :boxClass="carClass.a" :box="boxes.c" ref="boxca" :key="componentKey"></box>
						</div><!-- end of col -->	
			<!-- end of box3 -->


				</div><!-- end of row -->	

				
			 <div class="row col-sm-12">

						<!-- box4-->
							<div class="box col-sm-6 boxAcol6" v-on:click='changeArticle("box4")'>
									<box  :boxClass="carClass.a" :box="boxes.d" ref="boxda" :key="componentKey"></box>		
							</div><!-- end of col -->	
					<!-- end of box4 -->



						<!-- box5-->
								<div class="box col-sm-3" v-on:click='changeArticle("box5")'>
											<box  :boxClass="carClass.a" :box="boxes.e" ref="boxea" :key="componentKey"></box>	
							</div><!-- end of col -->	
						<!-- end of box5 -->


						<!-- box6-->
							<div class="box col-sm-3" v-on:click='changeArticle("box6")'>
											<box  :boxClass="carClass.a" :box="boxes.f" ref="boxfa" :key="componentKey"></box>
							</div><!-- end of col -->	
						<!-- end of box6 -->

		

			 </div><!-- end of row -->
	</div><!-- end of net -->	





























	<div id="net" v-show="mrezaState.b">
			 <div class="row col-sm-12">

					<!-- box1-->
						<div class="car col-sm-6" v-on:click='changeArticle("box1")'>
								<box  :boxClass="carClass.a" :box="boxes.a" ref="boxab" :key="componentKey"></box>			
						</div><!-- end of col -->	
					
					<!-- end of box1-->


					<!-- box2-->
						<div class="car col-sm-6" v-on:click='changeArticle("box2")'>
								<box  :boxClass="carClass.a" :box="boxes.b" ref="boxbb" :key="componentKey"></box>
						</div><!-- end of col -->	
					<!-- end of box2-->
			

				</div><!-- end of row -->	



				
			 <div class="row col-sm-12">
					<!-- box3-->
							<div class="car col-sm-3" v-on:click='changeArticle("box3")'>
								<box :boxClass="carClass.a"  :box="boxes.c" ref="boxcb" :key="componentKey"></box>
							</div><!-- end of col -->	
					<!-- end of box3-->


						<!-- box4-->
								<div class="car col-sm-3" v-on:click='changeArticle("box4")'>
								<box :boxClass="carClass.a" :box="boxes.d" ref="boxdb" :key="componentKey"></box>
							</div><!-- end of col -->	
						<!-- end of box4-->


						<!-- box5-->
							<div class="car col-sm-3" v-on:click='changeArticle("box5")'>
									<box  :boxClass="carClass.a" :box="boxes.e" ref="boxeb" :key="componentKey"></box>		
							</div><!-- end of col -->	
						<!-- end of box5-->

						<!-- box6 -->
							<div class="car col-sm-3" v-on:click='changeArticle("box6")'>
										<box :boxClass="carClass.a" :box="boxes.f" ref="boxfb" :key="componentKey"></box>			
							</div><!-- end of col -->	
						<!-- end of box6 -->
							
		

			 </div><!-- end of row -->
	</div><!-- end of net -->		







	<div id="net" v-show="mrezaState.c">
			 <div class="row col-sm-12">

					<!-- box1-->
						<div class="car col-sm-3" v-on:click='changeArticle("box1")'>
									<box  :boxClass="carClass.a" :box="boxes.a" ref="boxac" :key="componentKey"></box>	
						</div><!-- end of col -->	
					<!-- end of box1 -->


					<!-- box2-->
						<div class="car col-sm-3" v-on:click='changeArticle("box2")'>
										<box :boxClass="carClass.a" :box="boxes.b" ref="boxbc" :key="componentKey"></box>
						</div><!-- end of col -->	
					<!-- end of box2-->


					<!-- box3-->
						<div class="car col-sm-3" v-on:click='changeArticle("box3")'>
									<box :boxClass="carClass.a" :box="boxes.c" ref="boxcc" :key="componentKey"></box>
						</div><!-- end of col -->
				  <!-- end of box3-->	

					<!-- box4-->
							<div class="car col-sm-3" v-on:click='changeArticle("box4")'>
										<box  :boxClass="carClass.a" :box="boxes.d" ref="boxdc" :key="componentKey"></box>
						</div><!-- end of col -->
					<!-- end of box4-->
	

				</div><!-- end of row -->	



				
			 <div class="row col-sm-12">
						<!-- box5-->
							<div class="car col-sm-3" v-on:click='changeArticle("box5")'>
									<box  :boxClass="carClass.a" :box="boxes.e" ref="boxec" :key="componentKey"></box>
							</div><!-- end of col -->	
						<!-- end of box5-->

						<!-- box6-->
								<div class="car col-sm-3" v-on:click='changeArticle("box6")'>
												<box :boxClass="carClass.a" :box="boxes.f" ref="boxfc" :key="componentKey"></box>
							</div><!-- end of col -->	
				  	<!-- end of box6-->


						<!-- box7-->
							<div class="car col-sm-3" v-on:click='changeArticle("box7")'>
													<box  :boxClass="carClass.a" :box="boxes.g" ref="boxgc" :key="componentKey"></box>
							</div><!-- end of col -->	
					  <!-- end of box7-->

						<!-- box8-->
						<div class="car col-sm-3" v-on:click='changeArticle("box8")'>
												<box  :boxClass="carClass.a" :box="boxes.h" ref="boxhc" :key="componentKey"></box>
							</div><!-- end of col -->	
						<!-- end of box8-->
							
		

			 </div><!-- end of row -->
	</div><!-- end of net -->		






	<div id="net" v-show="mrezaState.d">
			 <div class="row col-sm-12">

					<!-- box1-->
						<div class="car col-sm-6" v-on:click='changeArticle("box1")'>
												<box  :boxClass="carClass.a" :box="boxes.a" ref="boxad" :key="componentKey"></box>
						</div><!-- end of col -->	
					<!-- end of box1-->


					<!-- box2-->
						<div class="car col-sm-6" v-on:click='changeArticle("box2")'>
													<box :boxClass="carClass.a"  :box="boxes.b" ref="boxbd" :key="componentKey"></box>	
						</div><!-- end of col -->	
					<!-- end of box2-->
						

	

				</div><!-- end of row -->	



				
			 <div class="row col-sm-12">
		
							<!-- box3-->
							<div class="car col-sm-6" v-on:click='changeArticle("box3")'>
												<box  :boxClass="carClass.a" :box="boxes.c" ref="boxcd" :key="componentKey"></box>	
							</div><!-- end of col -->	
							<!-- end of box3-->

							<!-- box4-->
								<div class="car col-sm-6" v-on:click='changeArticle("box4")'>
												<box :boxClass="carClass.a" :box="boxes.d" ref="boxdd" :key="componentKey"></box>
							</div><!-- end of col -->	
							<!-- end of box4-->
								

		

			 </div><!-- end of row -->
	</div><!-- end of net -->		












	<div id="net" v-show="mrezaState.e">
			 <div class="row">
	
					<!-- box1-->
						<div class="car col-sm-6" v-on:click='changeArticle("box1")'>
								<box  :boxClass="carClass.a" :box="boxes.a" ref="boxae" :key="componentKey"></box>
						</div><!-- end of col -->	
					<!-- end of box1-->


					<!-- box2-->
						<div class="car col-sm-3" v-on:click='changeArticle("box2")'>
										<box :boxClass="carClass.a" :box="boxes.b" ref="boxbe" :key="componentKey"></box>			
						</div><!-- end of col -->	
					<!-- end of box2-->

					<!-- box3-->
						<div class="car col-sm-3" v-on:click='changeArticle("box3")'>
									<box :boxClass="carClass.a" :box="boxes.c" ref="boxce" :key="componentKey"></box>	
						</div><!-- end of col -->	
					<!-- end of box3-->

	

				</div><!-- end of row -->	



				
			 <div class="row">

							<!-- box4-->
								<div class="car col-sm-6" v-on:click='changeArticle("box4")'>
												<box :boxClass="carClass.a" :box="boxes.d" ref="boxde" :key="componentKey"></box>		
								</div><!-- end of col -->	
							<!-- end of box4-->

							<!-- box5-->
								<div class="car col-sm-3" v-on:click='changeArticle("box5")'>
											<box :boxClass="carClass.a" :box="boxes.e" ref="boxee" :key="componentKey"></box>		
							</div><!-- end of col -->	
							<!-- end of box5-->
	


							<!-- box6-->
							<div class="car col-sm-3" v-on:click='changeArticle("box6")'>
												<box :boxClass="carClass.a"  :box="boxes.f" ref="boxfe" :key="componentKey"></box>	
							</div><!-- end of col -->
							<!-- end of box6-->
						

							
		

			 </div><!-- end of row -->
	</div><!-- end of net -->	






	<div id="net" v-show="mrezaState.f">
			 <div class="row">

					<!-- box1-->
						<div class="car col-sm-12 carDouble" v-on:click='changeArticle("box1")'>
									<box  :boxClass="carClass.b"  :box="boxes.a" ref="boxaf" :key="componentKey"></box>
						</div><!-- end of col -->	
					<!-- end of box1-->


			 </div><!-- end of row -->
	</div><!-- end of net -->	








		<div id="net" v-show="mrezaState.g">
			 <div class="row carDouble">
					
						<!-- box1-->
						<div class="car carDouble col-sm-6 " v-on:click='changeArticle("box1")'>
										<box :boxClass="carClass.b"  :box="boxes.a" ref="boxag" :key="componentKey"></box>
						</div><!-- end of col -->	
						<!-- end of box1-->

		 <div class="col-sm-6">

					 <div class="row">
					<!-- box2-->
						<div class="car col-sm-12" v-on:click='changeArticle("box2")'>
												<box :boxClass="carClass.a" :box="boxes.b" ref="boxbg" :key="componentKey"></box>
						</div><!-- end of col -->	
					<!-- end of box2-->
						</div><!-- end of row -->	

					 <div class="row">


					<!-- box3-->
									<div class="car col-sm-6" v-on:click='changeArticle("box3")'>
												<box :boxClass="carClass.a" :box="boxes.c" ref="boxcg" :key="componentKey"></box>	
									</div><!-- end of car -->	
					<!-- end of box3-->


						<!-- box4-->
									<div class="car col-sm-6" v-on:click='changeArticle("box4")'>
														<box :boxClass="carClass.a" :box="boxes.d" ref="boxdg" :key="componentKey"></box>						
									</div><!-- end of car -->	
					<!-- end of box4-->

				</div><!-- end of col -->	


						</div><!-- end of row -->	




			</div><!-- end of row -->


	</div><!-- end of net -->	





















	<div id="net" v-show="mrezaState.h">

		<div class="row carDouble">
				
					<!-- box1-->
						<div class="car col-sm-6 carDouble" v-on:click='changeArticle("box1")'>
										<box :boxClass="carClass.b" :box="boxes.a" ref="boxah" :key="componentKey"></box>				
						</div><!-- end of col -->	
					<!-- end of box1-->

		 <div class="col-sm-6">

					
					 <div class="row">
						
						<!-- box2-->
									<div class="car col-sm-6" v-on:click='changeArticle("box2")'>
														<box :boxClass="carClass.a" :box="boxes.b" ref="boxbh" :key="componentKey"></box>		
										</div><!-- end of car -->	
						<!-- end of box2-->

						<!-- box3-->			
											<div class="car col-sm-6" v-on:click='changeArticle("box3")'>
													<box :boxClass="carClass.a" :box="boxes.c" ref="boxch" :key="componentKey"></box>	
											</div><!-- end of car -->	
						<!-- end of box3-->	

				</div><!-- end of row -->	





 				<div class="row">


						<!-- box4-->
									<div class="car col-sm-6" v-on:click='changeArticle("box4")'>
															<box :boxClass="carClass.a" :box="boxes.d" ref="boxdh" :key="componentKey"></box>	
										</div><!-- end of car -->	
						<!-- end of box4-->

								
						<!-- box5-->
										<div class="car col-sm-6" v-on:click='changeArticle("box5")'>
														<box :boxClass="carClass.a" :box="boxes.e" ref="boxeh" :key="componentKey"></box>
										</div><!-- end of car -->	
						<!-- end of box5-->			



				</div><!-- end of row -->	






	</div><!-- end of col-sm-6 -->	

									





			</div><!-- end of row -->


	</div><!-- end of net -->	





		


	<div id="net" v-show="mrezaState.i">

		<div class="row carDouble">

				<!-- box1-->
						<div class="car col-sm-6 carDouble" v-on:click='changeArticle("box1")'>
							<box :boxClass="carClass.b"  :box="boxes.a" ref="boxai" :key="componentKey"></box>
						</div><!-- end of col -->	
				<!-- end of box1-->		

		 <div class="col-sm-6">

					 <div class="row">
				<!-- box2-->
									<div class="car col-sm-12" v-on:click='changeArticle("box2")'>
											<box :boxClass="carClass.a" :box="boxes.b" ref="boxbi" :key="componentKey"></box>
										</div><!-- end of car -->	
				<!-- end of box2-->
	
						</div><!-- end of row -->	





 				<div class="row">

						<!-- box3-->
									<div class="car col-sm-12" v-on:click='changeArticle("box3")'>
												<box :boxClass="carClass.a" :box="boxes.c" ref="boxci" :key="componentKey"></box>
										</div><!-- end of car -->	
						<!-- end of box3-->

				</div><!-- end of row -->	






			</div><!-- end of col-sm-6 -->	

									


			</div><!-- end of row -->


	</div><!-- end of net -->	













<div id="net" v-show="mrezaState.j">
			 <div class="row col-sm-12">

					<!-- box1-->
						<div class="car col-sm-3" v-on:click='changeArticle("box1")'>
											<box :boxClass="carClass.a" :box="boxes.a" ref="boxaj" :key="componentKey"></box>			
						</div><!-- end of col -->	
					<!-- end of box1-->

			
						<!-- box2-->
						<div class="car col-sm-6" v-on:click='changeArticle("box2")'>
											<box :boxClass="carClass.a" :box="boxes.b" ref="boxbj" :key="componentKey"></box>		
						</div><!-- end of col -->	
						<!-- end of box2-->


					<!-- box3-->
						<div class="car col-sm-3" v-on:click='changeArticle("box3")'>
												<box :boxClass="carClass.a" :box="boxes.c" ref="boxcj" :key="componentKey"></box>
						</div><!-- end of col -->	
				<!-- end of box3-->


				</div><!-- end of row -->	

				
			 <div class="row col-sm-12">

					<!-- box4-->
							<div class="car col-sm-3" v-on:click='changeArticle("box4")'>
												<box :boxClass="carClass.a" :box="boxes.d" ref="boxdj" :key="componentKey"></box>
							</div><!-- end of col -->	
				<!-- end of box4-->

				<!-- box5-->
								<div class="car col-sm-3" v-on:click='changeArticle("box5")'>
												<box  :boxClass="carClass.a" :box="boxes.e" ref="boxej" :key="componentKey"></box>
							</div><!-- end of col -->	
			 <!-- end of box5-->

			 <!-- box6-->
							<div class="car col-sm-3" v-on:click='changeArticle("box6")'>
											<box :boxClass="carClass.a" :box="boxes.f" ref="boxfj" :key="componentKey"></box>
							</div><!-- end of col -->	
			<!-- end of box6-->	


			<!-- box7-->
						<div class="car col-sm-3" v-on:click='changeArticle("box7")'>
											<box :boxClass="carClass.a" :box="boxes.g" ref="boxgj" :key="componentKey"></box>
						</div><!-- end of col -->	
		<!-- end of box7-->
	
		

			 </div><!-- end of row -->
	</div><!-- end of net -->	












	<div id="net" v-show="mrezaState.k">

		<div class="row carDouble">
				
				<!-- box1-->
						<div class="car col-sm-9 carDouble" v-on:click='changeArticle("box1")'>
								<box :boxClass="carClass.b" :box="boxes.a" ref="boxak" :key="componentKey"></box>
						</div><!-- end of col -->	
				<!-- end of box1-->

		 <div class="col-sm-3">

					 <div class="row">
					<!-- box2-->
									<div class="car col-sm-12" v-on:click='changeArticle("box2")'>
										<box :boxClass="carClass.a" :box="boxes.b" ref="boxbk" :key="componentKey"></box>				
										</div><!-- end of car -->	
					<!-- end of box2-->

						</div><!-- end of row -->	





 				<div class="row">
				<!-- box3-->
									<div class="car col-sm-12" v-on:click='changeArticle("box3")'>
										<box :boxClass="carClass.a" :box="boxes.c" ref="boxck" :key="componentKey"></box>							
									</div><!-- end of car -->	
				<!-- end of box3-->
				</div><!-- end of row -->	






			</div><!-- end of col-sm-6 -->	

									


			</div><!-- end of row -->


	</div><!-- end of net -->	



    </div><!-- end of container -->
	

</template>
	

<script>


	export default {


	 data() {
		return {
				componentKey: 0,
				mrezaState: { a:true, b:false, c:false, d:false, e:false, f:false, g:false, h:false, i:false, j:false, k:false },
				netsi: null,
				stevilkaMrezka:4,
				clanki:[],
				selected: null,
				userId: 0,
				boxes: { a:"box1", b:"box2", c:"box3", d:"box4", e:"box5", f:"box6", g:"box7", h:"box8" },
				boxeCh: ["boxa", "boxb", "boxc", "boxd", "boxe", "boxf", "boxg", "boxh"],
				stateMr: null,
				carClass: { a:"car", b:"carDouble" },

				boxsA:["boxaa", "boxab", "boxac", "boxad", "boxae", "boxaf", "boxag", "boxah", "boxai", "boxaj", "boxak"],
				boxsB:["boxba", "boxbb", "boxbc", "boxbd", "boxbe", "boxbg", "boxbh", "boxbi", "boxbj", "boxbk" ],
				boxsC:["boxca", "boxcb", "boxcc", "boxcd", "boxce", "boxcg", "boxch", "boxci", "boxcj", "boxck" ],
				boxsD: ["boxda", "boxdb", "boxdc", "boxdd", "boxde", "boxdg", "boxdh", "boxdj" ],
				boxsE: ["boxea", "boxeb", "boxec", "boxee", "boxeh", "boxej" ],
				boxsF: ["boxfa", "boxfb", "boxfc", "boxfe", "boxfj" ],
				boxsG: ["boxgc", "boxgj" ],
				boxsH: ["boxhc"],
				
				boxsABC: ["boxsA", "boxsB", "boxsC", "boxsD", "boxsE", "boxsF", "boxsG", "boxsH" ]
    }
	 },
	

	created(){
		
		this.fetchGeneral();
			this.userId = document.querySelector("meta[name='user-id']").getAttribute('content');
	},
	

	methods: {
			
			closeIzbira(){ 
					this.fetchGeneral();
				$('#exampleModal').modal('hide');
      },


		
			posodobi(){
			

				let netDisplay = { net: this.netsi};
        fetch('/netDisplaytemplatestate', {
          method: 'post',
          body: JSON.stringify(netDisplay),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())
          .then(data => {
          	$('#exampleModal').modal('hide');
          })
          .catch(err => console.log(err));				

			}, /* end of posodobi */




		

			posodobiVsebino(){
								
					let novaVsebina = this.selected;
					let stevilkaMrezka = this.stevilkaMrezka;
				

					let posodobljeno = { title: novaVsebina, mrezaId: stevilkaMrezka};
					var a = this;



        fetch('/posodobljenimrezek', {
          method: 'post',
          body: JSON.stringify(posodobljeno),
          headers: {
            'content-type': 'application/json'
          }
        })
					.then(function(){	
					
								let	mr = "c"+stevilkaMrezka; 
										let imgTag = document.getElementById(mr);
										let	elle = "[id="+mr+"]";
										var elms = document.querySelectorAll(elle);

									let ran = Math.random();
								for(var i = 0; i < elms.length; i++) {
											let ran = Math.random();
												elms[i].setAttribute("src", "/returnImage?img="+stevilkaMrezka+"&changed="+ran);
										}
						
								/* end of for loop */
					 
							$('#izbMrez').modal('hide');
								 
					})
          .catch(err => console.log(err));	


			/*	$refs does not update multiple components on with same name reference ... 
					refactor later on ...		
						a.$refs.boxa.posodobi();	
			*/
			
						a.posodobiText(stevilkaMrezka);
								
			}, /* end of posodobiVsebino  */


			posodobiText(boxS){
										
							let boxSN = Number(boxS) -1;
							let	boxsABCa = this.boxsABC[boxSN];
							let sll = this[boxsABCa];

							var i;
							for (i = 0; i <= sll.length; i++) {
									this.$refs[sll[i]].posodobi();
							}

		
						
			}, /* end of posodobiText  */




		
				
			changeArticle(box){

			if(this.userId == 0){ return; };

				
					this.stevilkaMrezka = box.charAt(3);
					
				    fetch('/getArticles', {
				      method: 'get',
				    })
				      .then(res => res.json())
				      .then(data => {
						
								let clanki = [];
								data.forEach(function(value){
									clanki.push(value['title']);
								});
									this.clanki = clanki;
								
				      })
				      .catch(err => console.log(err));
				
				


					let boxing = box.substring(0, 3);
					if(box = boxing){
							$('#izbMrez').modal('show');
					};/* end of if(box */
				
				


			}, /* end of changeArticle */


			



				clickMri(boxSet){

						this.netsi = boxSet;
						let mriAll = document.getElementsByClassName('rounded');	
				/* refactor later on */
						mriAll[0].classList.remove('rounded');
						let mriSelected = document.getElementById(boxSet);
						mriSelected.classList.add('rounded');
						this.setNet(boxSet);
			},




			setNet(netState){ 
						this.stateMr = netState; 
						let  merzatest = { ...this.mrezaState };					
				
						Object.keys(merzatest).forEach(key => {				
									if(key == netState){ merzatest[key] = true;  } 
									if(key !== netState){ merzatest[key] = false; } 
						});
		
						this.mrezaState = { ...merzatest };
			
			
			} /* end of setNet */,




		fetchGeneral(){	
		
				fetch("/fetchGeneral")	
						.then(res => res.json())
						.then(res => {
							let stateVal = res[0]['netDisplaytemplatestate'];	
							this.setNet(stateVal);
				});
			
		
		} /* end of fetchGeneral */ 


	},/* end of methods */ 



	}


</script>

