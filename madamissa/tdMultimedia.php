<td style="width:5%;height:600px;padding-left:5px;margin-left:5px;padding-top:0px;">
	<div style="width:100%;height:100%;background-color: rgba(0, 0, 0, 0.2);padding-top:0px;float:top;">

		<div id="btnFb">
			<iframe src="http://www.facebook.com/plugins/like.php?href=https://www.facebook.com/madamizapage?fref=ts;layout=standard&amp;width=200&amp;show_faces=false&amp;action=like&amp;colorscheme=dark&amp;color=white$amp;height=80"
			scrolling="no"  frameborder="1" style="border:none;  width:200px; height:40px;" allowtransparency="false"></iframe>
		</div>
		
		<br/>
	
		<div id="Multimedia">
			<img src="images/playlist/playlist-madamiza.jpg" style="width:95%;height:auto;margin:5px 5px 0px 5px;">
				<audio controls="controls" preload="none" autoplay="autoplay" style="width:220px;height: 30px;">
					<source src="musque/svinkels.mp3" type="audio/mp3">
					<source src="music.ogg" type="audio/ogg">
					<source src="music.aac" type="audio/aac">
					<source src="music.m4a" type="audio/m4a">
				</audio>
		</div>

			<div class="container"style="width:220px;height:auto;padding:0;margin:0;">
				<br/>
					<div id="myCarousel" class="carousel slide" data-ride="carousel"style="width: 98%;margin:2px;">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

						  <div class="item active" style="height:245px;">
							<img src="images/carrousel/photo.png" alt="Chania"style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-1.JPG" alt="Chania" style="width:216px;height:245px;">
						  </div>
						
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-2.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>

						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-3.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-4.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-5.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-6.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-7.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-8.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-9.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
						  
						  <div class="item" style="height:245px;">
							<img src="images/carrousel/photo-10.JPG" alt="Flower" style="width:216px;height:245px;">
						  </div>
					</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="left:0;top:5%;max-height:245px;height:245px;width:25px;border:0; background:none;border-radius:0;">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="right:0;top:5%;max-height:245px;height:245px;width:25px;border:0;background:none;border-radius:0;">
				  <span class="glyphicon glyphicon-chevron-right" ></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			</div>	
			<p id="pNews"><marquee  direction="right" loop="0">NEWS</marquee></p>
			<div id="NewArticle">
				<?php
				include_once("connexionPDO.php");
				$bdd =connect();
				$req = "SELECT * FROM newsarticle";
				$resultat = $bdd->query($req);
				if(!$resultat)
				{
					$message_erreur = $bdd->errorInfo();
					echo "Lecture impossible, code = ".$bdd->errorCode()."  ".$message_erreur[2];
				}
				else
					{?> 
						<table style="width:220px;table-layout: fixed;"><?php
							while($ligne = $resultat->fetch(PDO::FETCH_OBJ))
							{?><tr>
									<td>
									<div style="margin-top:3px;">
										<a href="<?php echo $ligne->categorie ?>.php" style="text-decoration:none;">
											<p style="background-color: rgba(0, 0, 0, 0.4);height: auto;margin-bottom:1px;">
												<font style="color:white;width:100%;font-size:14px;"><?php echo $ligne->titre  ?></font>
											</p>
										</a>
									</div>
									</td>
							</tr>
							<tr>
								<td>
									<table>
										<tr>
											<td style="width:33%;">
												<a href="<?php echo $ligne->categorie ?>.php" style="text-decoration:none;">
													<span class='image' style="width: 80px;height:auto;margin-left:2px;position:relative"> <img src="images/News/<?php echo $ligne->image ?>" style="width:80px;height:auto;">  </span>
												</a>
											</td>
											<td style="width:60%;">	
												<a href="<?php echo $ligne->categorie ?>.php" style="text-decoration:none;">
													<p style="color:white;width: 132px;font-size:12px;margin-left: 5px;margin-top: 5px;margin-bottom:2px;"> <?php echo $ligne->texte  ?> </p>
												</a>
											</td>
										</tr>
								   </table>
								</td>
							
							</tr>
							<?php
						}?>
					</table>
				<?php
				}
				?>
			</div>			
	</div>
</td>

