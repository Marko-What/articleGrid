<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\general;
use App\articles;

use App\netDisplaytemplate;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public $general;public $articles;public $netDisplaytemplate;
	
	function __construct() {
		$this->general = new general();
		$this->articles = new articles();
		$this->netDisplaytemplate = new netDisplaytemplate();
	} /* end of a constructor function*/




	public function fetchGeneral(){

		$general = $this->general::where('id', '=', 1)->get();
				
		return $general;

	} /* end of fetchGeneral */


	
										
	public function netDisplaytemplatestate(request $request){
	
			
        $validator = Validator::make($request->all(), [
           'net' => 'required|string|max:5',
       	]);
        
       if ($validator->fails()) {
           return "do not try to be an idiot please!!";
		die();
       };
	

	  	$general = $this->general::where('id', 1)->update(array('netDisplaytemplatestate' => $request['net']));
			return $general;

	} /* end of netDisplaytemplatestate */





	public function posodobljenimrezek(request $request){	


			 $validator = Validator::make($request->all(), [
           'title' => 'required|string|max:64',
					 'mrezaId' => 'required|string|max:5',
       	]);
        
       if ($validator->fails()) {
           return "do not try to be an idiot please!!";
						die();
       };
	
			
			$boksic = "box" . $request['mrezaId'];
			$articleId = $this->articles::where('title', '=', $request['title'])->first();	
							
		 $netDisplaytemplate = $this->netDisplaytemplate::where('box', $boksic)->update(array('articleId' => $articleId['id']));
		

	} /* end of posodobljenimrezek */






	public function returnImage(request $request){
			
		
			
			 $validator = Validator::make($request->all(), [
           'img' => 'required|string|max:24',
       	]);
        
       if ($validator->fails()) {
           return "do not try to be an idiot please!!";
						die();
       };

				$filename = $request['img'];
				$boksic = "box" . $filename;
			
				
			$boxImage = $this->netDisplaytemplate::where('box', '=', $boksic)->first();
					$filaes	= $boxImage['articleId'] . ".jpg";	

			try {

					$disk = Storage::disk('public')->get($filaes);

			} catch (\Exception $e) {

					return "path to image does not exist";
					die();
			}

			
				if(!empty($disk)) { return response($disk, 200)->header('Content-Type', 'image/jpeg');} 

	} /* end of returnImage */





	public function getArticles(){

			$articlesS = $this->articles->get();
			return $articlesS;

		} /* end of getArticles */



	public function artTitle(request $request){

					$validator = Validator::make($request->all(), [
				       'artiRef' => 'required|string|max:5',
				   	]);
				    
				   if ($validator->fails()) {
				       return "do not try to be an idiot please!!";
								die();
				   };
	


				$artiRef = $request['artiRef'];
				if($artiRef == "all"){
			
						$netDisplaytemplate = $this->netDisplaytemplate->get();
						//return $netDisplaytemplate;
								$netDisplayA = [];
								$i = 0;
							foreach($netDisplaytemplate as $netDisplay){
										$i++;
										$netDisplayA[$i] = $netDisplay['articleId'];
							}; /* end of foreach */
					
								$articlesS = $this->articles::whereIn('id', $netDisplayA)->get();
	
								$ii = 0;
							foreach($articlesS as $art){
										$ii++;
										
								$age = array("title"=>$art['title'], "label"=>$art['label']);

										$artt[$ii] = $age;
							}; /* end of foreach */
					/* {"title":"title 7","label":"tekmovanja"} */

								return $artt;
				} /* end of if */

					







				$boksic = "box" . $artiRef;

				
					

							$netDisplaytemplate = $this->netDisplaytemplate::where('box', $boksic)->get();
	

			if(!$netDisplaytemplate->isEmpty()) { 
					

				$articleId = $netDisplaytemplate[0]['articleId'];
				$articlesS = $this->articles::where('id', $articleId)->get();
			
					try {

						$articlesS = $this->articles::where('id', $articleId)->get();

					} catch (\Exception $e) {

							return "article with referenced id does does not exist";
							die();
					};


				$data = array("title"=>$articlesS[0]['title'], "label"=>$articlesS[0]['label'] );

					return json_encode($data);


			} /* end of !empty($netDisplaytemplate)*/ else { return "netstat id reference does not exist";};


			

	} /* end of artTitle */


	




};


