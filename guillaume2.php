<!DOCTYPE html>
<html> 
    <head>
        <!-- /* le titre de la page  */  -->
        <title> guillaume </title>
		<!--/*pour afficher tous les caracteme meme les speciaux  */   -->
		<meta charset="utf-8">
        <!--/*   */   -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--/*importation de ce lien elle permet de nous afficher les photo des reseau sociaux fb insta ex 'fab fa-facebook-f'*/-->
         <link rel="stylesheet"  type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!--/* lintegration de fichier css avec html */-->
		<link rel="stylesheet"  type="text/css" href="css/aos.css"/>
        <link rel="stylesheet"  type="text/css" href="css/guillaumstyle.css"/>
        <link rel="stylesheet"  type="text/css" href="css/style-switcher.css"/>
		
		
		

    </head>

    <body>
	    <!-- Preloader START -->
	   
		<div class="preloader js-preloader">
		     <div> </div>
		</div>
	    <!-- Preloader end -->
	    <!-- Messenger Plugin de discussion Code START -->
    <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "107956338639432");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
	
	  <!-- Messenger Plugin de discussion Code END -->
	  <!--
	   <audio loop autoplay>
            Votre navigateur ne supporte pas l'élément <code>audio</code>.
            <source src="audio/music.mp3" type="audio/wav">
       </audio>
	   -->
       <!--/*page wrapper start   */   -->
	   <div class="page-wrapper">
	  
	         <!--/* header start  */   -->
	         <header class="header js-header">
			     <div class="container">
				     <div class="logo" data-aos="fade-down" data-aos-duration="1000">
					      
					      <a href="#"><img src="logo/logo.png"  alt="logoo"></a>
					      <a href="#"> Guillaume <span>Promotion Immobiliere </span></a> 
					      
					     </div>
					     <button  type="button" class="nav-toggler js-nav-toggler"  data-aos="fade-down" data-aos-duration="1000">
					         <span> </span>
					     </button>
						 <nav class="nav js-nav">
						     <ul  data-aos="fade-down" data-aos-duration="1000">
							     <li> <a href="#home">Accuiel</a></li>
								 <li> <a href="#about">A propos De</a></li>
								 <li> <a href="#services">services</a></li>
								 <li> <a href="#projets">projets</a></li>
								 <li> <a href="#contact">contact</a></li>
							 </ul>
						 
						 </nav>
					 
			         </div>
	         </header>
	   
	          <!--/* header end  */   -->
			  
			  <!--/* home section start  */   -->
			  <section class="home" id="home">
			    
			    <div class="container">
				    <div class="grid">
					    <div class="home-text">
						 <h1 data-aos="fade-up" data-aos-duration="1000">EURL Guillaume Promotion Immobiliere </h1>
						 <p>appartements promotionnels de haute qualitées avec prix raisonable dans un extraordinaire emplacement </p>
							     <div class="btn-wrap" >
							         <a href="#about" class="btn" > En savoir plus </a>
							     </div>
						</div>
						          <div class="hero">
		                              <video autoplay loop muted plays-inline class="back-video">
			                          <source src="video/guillaume.mp4"   type="video/mp4">
			                          </video>
								  </div>

						          <div class="home-img"> 
						          <div class="circle-wrap">
							      <div class="circle"> </div>
							      </div>
								  <!--/*
						          <img src="img2.png" alt="img">
								  */   -->
						          </div>
						          
						   
					</div>
			    </div>
			  </section>
			  
			  <!--/* home section end  */-->
			  
			  <!--/* about section start  */-->
			  <section class="about section-padding" id="about">
			     <div class="container">
				     <div class="grid">
					     <div class="about-img">
						     <div class="img-box" data-aos="zoom-in" data-aos-duration="1000">
							
							     <img src="img/imeuble.png" alt="img">
							  
								     <div class="box box-1">
									     <span>2.5k </span>
									     <p>Clients satisfaits</p>
									 </div>
							 </div>
					     </div>
							 <div class="about-text">
							     <div class="section-title">
								     <span class="title" data-aos="fade-up" data-aos-duration="600"> A propos de </span>
									 <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600"> Nous somme ouvert depuis le 2022</h2>
								 </div>
								 <p data-aos="fade-up" data-aos-duration="600"> Nous somme une entreprise aui fait le vente de tout les types des appaertement quelque sois le type simplex, duplex, triplex dans des endroits fantastique avec un prix raisonnable. </p>
								 <p data-aos="fade-up" data-aos-duration="600">Nous avons commencer les traveaux batiments depuis 2018</p>
							 </div>
					 </div>
				 </div>
			  
			  </section>
			  <!--/* about section end  */-->
			  <!--/* service section start  -->
			  <section class="services section-padding" id="services">
			   <div class="container">
			     <div class="section-title">
				     <span class="title" data-aos="fade-up" data-aos-duration="600"> Nos Services </span>
					 <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">Ce qui nous faisons</h2>  
				 </div>
				 <div class="grid">
				     <!--/* section items start  */   -->
					 <div class="services-item" data-aos="fade-up-right" data-aos-duration="600" >
					     <div class="img-box">
						     <img src="services/appartement.png"  alt="carpet">
						 </div>
					     <h3> vente des appartements</h3>
					 </div>
					 <!--/* section items end  */   -->
					 <!--/* section items start  */   -->
					 <div class="services-item" data-aos="fade-up-right" data-aos-duration="600" data-aos-delay="100">
					     <div class="img-box">
						     <img src="services/commerce.png"  alt="window">
						 </div>
					     <h3> vente des locaux commerciaux</h3>
					 </div>
					 <!--/* section items end  */   -->
					 <!--/* section items start  */   -->
					 <div class="services-item"data-aos="fade-up-right" data-aos-duration="600" data-aos-delay="200">
					     <div class="img-box">
						 <img src="services/bungalow.png"  alt="bathroom">
						 </div>
					     <h3> vente des bungalow</h3>
					 </div>
					 <!--/* section items end  */   -->
					 <!--/* section items start  */   -->
					 <div class="services-item" data-aos="fade-up-right" data-aos-duration="600" data-aos-delay="300">
					     <div class="img-box">
						 <img src="services/partenariat.png"  alt="bathroom">
						 </div>
					     <h3> partenariat</h3>
					 </div>
					 <!--/* section items end  */   -->
				</div> 
			  </section>
			  <!--/* services section end  */   -->
			  
			  <!--/* pricing section start  */   -->
			  <section class="pricing section-padding" id="projets" >
			    <div class="contanier">
				    <div class="section-title">
					     <span class="title" data-aos="fade-up-right" data-aos-duration="600"> projets </span>
						 <h2 class="sub-title" data-aos="fade-up-right" data-aos-duration="600">Nos projets finis</h2>
				    </div>
					<div class="grid" >
					<!--/* basic plan start */   -->
					    <div class="pricing-item" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="100">
						     <div class="pricing-header">
							     <img src >  </img>
							     <h3> realisation de 14 logement promotionnel ain defla</h3>
								 <div class="price"><span>299DA</span>Montly </div>
						     </div> 
							 <div class="pricing-body">
							    <ul>
								     <li> <i class=""> </i> window cleaning</li>
								     <li> <i class=""> </i>jgfvfkdfkldfgdf</li>
								     <li> <i class=""> </i>jkfnjkdfnjkdfn</li>
								     <li> <i class=""> </i>jknfnfdjfd</li>
								     <li> <i class=""> </i>kjndfjnfdlnf</li>
								</ul>
						     </div>
							 <div class="pricing-footer">
							     <a href="#" class="btn"> get started </a>
						     </div>
					    </div>
					
					<!--/* basic plan end*/   -->
					<!--/*  standard plan start */   -->
					 <div class="pricing-item" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="100">
						     <div class="pricing-header">
							     <h3> Realisation de 11 bungalow oued goussine</h3>
								 <div class="price"><span>299DA</span>Montly </div>
						     </div> 
							 <div class="pricing-body">
							    <ul>
								     <li> <i class=""> </i> window cleaning</li>
								     <li> <i class=""> </i>jgfvfkdfkldfgdf</li>
								     <li> <i class=""> </i>jkfnjkdfnjkdfn</li>
								     <li> <i class=""> </i>jknfnfdjfd</li>
								     <li> <i class=""> </i>kjndfjnfdlnf</li>
								</ul>
						     </div>
							 <div class="pricing-footer">
							     <a href="#" class="btn"> get started </a>
						     </div>
					    </div>
					
					<!--/* standard plan end*/   -->
					<!--/* premium plan end*/   -->
					 <div class="pricing-item" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200">>
						     <div class="pricing-header">
							     <h3> Realisation de 20 logement promotionnel TENES</h3>
								 <div class="price"><span>299DA</span>Montly </div>
						     </div> 
							 <div class="pricing-body">
							    <ul>
								     <li> <i class=""> </i> window cleaning</li>
								     <li> <i class=""> </i>jgfvfkdfkldfgdf</li>
								     <li> <i class=""> </i>jkfnjkdfnjkdfn</li>
								     <li> <i class=""> </i>jknfnfdjfd</li>
								     <li> <i class=""> </i>kjndfjnfdlnf</li>
								</ul>
						     </div>
							 <div class="pricing-footer">
							     <a href="#" class="btn"> get started </a>
						     </div>
					    </div>
					
					<!--/* premium plan end*/   -->
					</div>
			    </div>
			  </section>
			  
			  
			  <!--/* pressing section end  */   -->
			  
			   <!--/* contact section start  */   -->
			   <section class="contact section-padding" id="contact">
			     <div class="container">
				     <div class="section-title">
					     <span class="title" data-aos="flip-left" data-aos-duration="600">contacter nous</span>
						 <h2 class="sub-title" data-aos="flip-left" data-aos-duration="600"> Vous Avez Des Questions ?</h2>
					 </div>
					 <div class="grid contact-grid">
					     <div class="contact-info">
						     <div class="contact-info-item" data-aos="flip-left" data-aos-duration="600">
							     <i class="fas fa-map-marker-alt"></i>
								 <h3>adresss</h3>
								 <p>L'entrée sud de ténès, Bloc C, deuxième étage</p>
							 </div>
							 <div class="contact-info-item" data-aos="flip-left" data-aos-duration="600">
							     <i class="fas fa-phone"></i>
								 <h3>call us</h3>
								 <p>06 99 19 05 83 <br> 027 76 47 71</p>
							 </div>
							 <div class="contact-info-item" data-aos="flip-left" data-aos-duration="600">
							     <i class="fas fa-envelope"></i>
								 <h3>Email us</h3>
								 <p>guillaume-pro@immob.me</p>
							 </div>
						 </div>
						 <div class="contact-form" data-aos="flip-left" data-aos-duration="600">
						 
						 
						 
						 
						     
						     <form method="post" // action="#contact"//> 
							     <h3> Nom </h3>
							     <div class="input-box">
							         <input type="text" name="name" id="name" placeholder="Nom" class="input-control" required>
							     </div>
								 <h3> Adresse Email </h3>
								 <div class="input-box">
							         <input type="text" name="email" id="email" placeholder="Ex:email@gmail.com" class="input-control" required>
							     </div>
								 <h3> Numero Du Telephone </h3>
								 <div class="input-box">
							         <input type="text" name="phone" id="phone" placeholder="Ex: 06XXXXXXXX" class="input-control" required>
							     </div>
								 <h3> Posez Votre Questions</h3>
								 <div class="input-box">
							         <textarea name="message" id="message" placeholder="Message " class="input-control" required></textarea>
							     </div>
								 <div class="btn-wrap" >
								     <button type="submit" name="formsend" id="formsend" class="btn">Envoyer </button>
								 </div>
							 </form>
							  <?php 
     include 'database.php';
	 global $db;
	 	 
    
	 
	 
     if(isset ($_POST['formsend'])) // isset si existe 
	 {
	      $name = $_POST['name']; // methode post permet ajouter des information a une base de donnees
	      $email = $_POST['email'];
	      $phone= $_POST['phone'];
	      $message = $_POST['message'];
	 
	 
	     if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)) // empty si est vide
	     {
	         // on prepare la requete
	           $q = $db-> prepare("INSERT INTO `users`(`name`, `email`, `phone`, `message`) VALUES (:name,:email,:phone,:message)");
	          // on execute la requete
	          $q ->execute([':name' =>$name, ':email' => $email , ':phone' =>$phone, ':message' =>$message]);
	         	 echo "Bonjour $name votre formulaire a ete envoyer avec succes "; 
	     }
	     else {
		         echo "Une Erreur est servenue lors de l'envoie du fichier";
	     }
	 
	 }
	 
 ?>
							 
						 </div>
					 </div>
				 </div>
			   </section>
			   <!--/* contact section end  */   -->
			   
			   <!--/* footer start */-->
			  <footer class="footer">
			     <div class="container">
				     <h3>Abonner nous</h3>
					     <div class="social-links">
						     <a href="https://www.facebook.com/profile.php?id=100083597491161" title="facebook"><i class="fab fa-facebook-f"></i></a>
							 <a href="https://twitter.com/Guillaumepromo1?t=TE0JF-VkG6JJzqW35fB0kA&s=07&fbclid=IwAR3vNnlmYp3IK3wGFrtqnjQ29vZ3J59TdzGLNdj0GVEvG_qnvErz4XAxqgc" title="twitter"><i class="fab fa-twitter"></i></a>
							 <a href="https://www.instagram.com/guillaumepromotion/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR0nGZsYFhACYjFzJn_rO6zdnR2m_3PsdN9WN8dvw8fE66xcuGoGZIVYb0Q" title="instagram"><i class="fab fa-instagram"></i></a>
							 <a href="https://www.youtube.com/channel/UCL43ZgopdCO4LIU0sNZlEcw" title="youtube"><i class="fab fa-youtube"></i></a>
						 </div> 
				 </div>
			  </footer>
			  <footer class="footer1">
		    <div class="container1">
			    <div class= "row">
				         <div class="footer1-col">
				             <h3> Contactez-nous</h3>
					         <ul class="liste-services">
					         <li><a href="#footer1-col"><i class="fas fa-mobile"></i>  06 99 19 05 83 </a></li>
							 <li><a href="#footer1-col"><i class="fas fa-phone"></i>  027 76 47 71 </a></li>
						     <li><a href="https://accounts.google.com/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser"><i class="fas fa-envelope"></i>  guillaume-pro@immob.me </a></li>
							 </ul>
						    
			             </div>
				
				         <div class= "footer1-col">
				             <h3> Abonner nous</h3>
					         <div class="social1-links">
							     <a href="https://www.facebook.com/profile.php?id=100083597491161"><i class="fab fa-facebook-f"></i></a>
								 <a href="https://twitter.com/Guillaumepromo1?t=TE0JF-VkG6JJzqW35fB0kA&s=07&fbclid=IwAR3vNnlmYp3IK3wGFrtqnjQ29vZ3J59TdzGLNdj0GVEvG_qnvErz4XAxqgc"><i class="fab fa-twitter"></i></a>
								 <a href="https://www.instagram.com/guillaumepromotion/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR0nGZsYFhACYjFzJn_rO6zdnR2m_3PsdN9WN8dvw8fE66xcuGoGZIVYb0Q"><i class="fab fa-instagram"></i></a>
								 <a href="https://www.linkedin.com/in/guillaume-promotion-immobili%C3%A8re-852242256/?fbclid=IwAR1Ekf81hB5Q8EJqIAIR4uYEC3QC1CacGxnrCpmIn-YMb3xp1ckM2F8y0_o"><i class="fab fa-linkedin-in"></i></a>
								 <a href="https://www.viber.com/ar/"><i class="fab fa-viber"></i></a>
								 <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
								 <a href="https://www.youtube.com/channel/UCL43ZgopdCO4LIU0sNZlEcw"><i class="fab fa-youtube"></i></a>
							 </div>
							 
					        
			             </div>
				
				         <div class= "footer1-col">
				             <h3> Nos agences </h3>
					         <ul class="liste-services">
					         <li><a href="https://www.google.com/maps/place/Ade+tenes/@36.504382,1.3095902,17z/data=!3m1!4b1!4m5!3m4!1s0x12847bee70f34cd7:0xa3817cfc288096a5!8m2!3d36.5043237!4d1.3074308">
							 <i class="fas fa-map-marker-alt"></i> L'entrée sud de la ville du ténès Wilaye de Chlef Bloc C - deuxième étage</a></li>
							 </ul>
						   
							 
						     
			             </div>
				
				         <div class= "footer1-col">
				             <h3>Nos Horraire </h3>
					         <ul class="liste-services">
					         <li><a href="#footer-col"> ✔️dimanche 08h-12 | 13:30-16:30  </a></li>
						     <li><a href="#footer-col"> ✔️lundi 08h-12 | 13:30-16:30     </a></li>
						     <li><a href="#footer-col"> ✔️mardi 08h-12 | 13:30-16:30     </a></li>
						     <li><a href="#footer-col"> ✔️mercredi 08h-12 | 13:30-16:30  </a></li>
						     <li><a href="#footer-col"> ✔️jeudi 08h-12 | 13:30-16:30     </a></li>
						     <li><a href="#footer-col"> ❌vendredi  </a></li>
						     <li><a href="#footer-col"> ❌samedi    </a></li>
							 </ul>
			             </div>
						
					
				</div>
			
			</div>
		    
		</footer>
			   
			   
			   <!--/* footer end */-->
		</div>
       <!--/* page wrapper end  */   -->
       
	    <!--/* style switcher start  */   -->
		
		<div class="style-switcher js-style-switcher">
		  <button type="button" class="style-switcher-toggler js-style-switcher-toggler">
		   <i class="fas fa-cog"></i>
		  </button>
		  <div class="style-switcher-main">
		   <h2> style switcher</h2> 
		   <div class="style-switcher-item">
		     <p> theme color</p>
			<div class="theme-color">
			 <input type="range" min="0" max="360" class="hue-slider js-hue-slider">
			 <div class="hue">Hue: <span class="js-hue"></span>  </div>
			 </div>
			</div>
		   <div class="style-switcher-item">
		    <label class="form-switch"> 
		      <span>dark mode</span>
              <input type="checkbox" class="js-dark-mode">
			    <div class="box"></div>
		    </label>
		   </div>
		  </div>
		</div>
		<!--/* style switcher end  */   -->
 
      <script src="js/aos.js"></script>	
      <script src="js/main.js"></script>	
      <script src="js/style-switcher.js"></script>	
    </body>

</html>             
