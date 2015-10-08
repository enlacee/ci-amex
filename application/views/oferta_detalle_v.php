

<div class="head_3">
	<div class="container">
    	<div class="row">
			 <div class="col-xs-12">
             	<h1>Ofertas para particulares American Express</h1>
                
                <div class="ctn">
                
                	<div class="row">
                    	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 xs580Max_width_100 xs580Max_center">
                        	<ul class="media-boxes-filter" id="filter">
                                <li class="xs580Max_center"><a class="selected" href="/ofertas" data-filter="*"><i><img src="/assets/images/icon/menu-icon-offers.png" width="34" height="30"></i>Todas las ofertas</a></li>
                                <!--<li class="xs580Max_center"><a href="#" data-filter=".viajes"><i><img src="/assets/images/icon/menu-icon-travel-2-.png" width="34" height="30"></i>Viajes</a></li>
                                <li class="xs580Max_center"><a href="#" data-filter=".compras"><i><img src="/assets/images/icon/menu-icon-shopping-2-.png" width="34" height="30"></i>Compras</a></li>
                                <li class="xs580Max_center"><a href="#" data-filter=".otros"><i><img src="/assets/images/icon/menu-icon-dining-2-.png" width="34" height="30"></i>Otros</a></li>-->
                            </ul>
                        </div>
                        
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 xs580Max_width_100">
                        	<!--<input type="text" id="search" class="form-control" placeholder="Buscar...">-->
                        </div>
                    </div>
                    
                            
                </div>
                
                <div class="arrowHead_3">
                	<i class="fa fa-caret-down"></i>
                </div>
                
             </div>
        </div><!--End row-->     
    </div><!--End container-->
</div><!--End head_3-->


<!--Col Breadcrumbs-->
<div class="container">
	<div class="row">
    	<div class="col-xs-12">
        	<span class="breadcrumbs">Todas las ofertas / Compras / Nombre de la oferta</span>
        </div>
    </div>
</div>
<!--End Col Breadcrumbs-->

<section class="ctnBody">
	<div class="container">
    	<div class="row">
        	
            <!--Col Left-->
            <div class="col-xs-7 col-sm-8 col-md-8 col-lg-8 xs580Max_width_100 left">
            
            	<!--Box-->
            	<div class="box_left">
                <div class="ctn bg_cover" style="background-image: url('<?php echo "/assets/images/banner/ofertas/".$detalle->image; ?>');">
                </div>
              </div>
              <!--End Box-->
                
                
                <!--Box-->
            	<div class="box_left socialweb">
                    <div class="ctn">
                    	<div class="ctnLeft">
                        	<div class="row">
                        
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-6 col_1">
                                    <div class="shared_title">
                                        <h3>Comparta esta oferta</h3>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-8 col-lg-6 col_2">
                                	<ul class="redes">
                                    	<li class="facebook">
                                            <div id="fb-root"></div>
                                            <script>(function(d, s, id) {
                                              var js, fjs = d.getElementsByTagName(s)[0];
                                              if (d.getElementById(id)) return;
                                              js = d.createElement(s); js.id = id;
                                              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
                                              fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-like" data-href="<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="twiter">
                                        	<div class="ctnTwitter">
                                               <a href="https://twitter.com/share" class="twitter-share-button" data-via="twitter" data-lang="es">Twittear</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
											</div>
                                        </li>
                                    	<li>
                                        	<a href="#">
                                            	<i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            
                        	</div>
                        </div>
                    </div>
                </div>
                <!--End Box-->
                
            </div>
             <!--End Col Left-->
             
             
             
             
             
             
             
             
             
             
             
             
             
             <!--Col Right-->
            <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 xs580Max_width_100 right">
            
            	<?php /*?><!--Box-->
            	<div class="box_right">
                    <div class="ctn">
                        <div class="rightCtn">
                            <h3>La oferta</h3>
                            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
                            <p><a href="#" class="btn-link">Leer Más</a></p>
                            <p>(Enlace a la sección de ofertas)</p>
                        </div>
                    </div>
                </div>
                <!--End Box--><?php */?>
                
                
                <!--Box-->
            	<div class="box_right">
                    <div class="ctn">
                        <div class="row rightCtn">
                        
                            <div class="col-xs-3 col_1">
                                <div class="icono_right">
                                    <i class="fa fa-check-circle"></i>
                                </div>
                            </div>
                            
                            <div class="col-xs-9 col_2">
                                <!-- Ofertas laterales-->
                                <?php 
                                  $bar_title        = $detalle->bar_offert_title;
                                  $bar_description  = $detalle->bar_offert_description;
                                ?>
                                <?php if( empty( $bar_title ) && empty( $bar_description ) ): ?>
                                  <h3>No hay ofertas publicadas</h3>
                                  <p>Muy pronto...</p>                                
                                <?php else: ?>
                                  <h3><?php echo $detalle->bar_offert_title; ?></h3>
                                  <p><?php echo $detalle->bar_offert_description; ?></p>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--End Box-->
                
                
            </div>
             <!--End Col Right-->
             
             
         
         
            <!--Ofertas-->      
            <div class="container">
                <div class="row">
                    <div class="col-xs-12"> 
                        <div class="box_left">
                            <div class="ctn">
                                <div class="ctnLeft">
                                    <h3><?php echo $detalle->title; ?></h3>
                                    <?php echo $detalle->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
            <!--End Oferta-->     
 
 
 
                
            <!--Ofertas relacionadas-->               
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                        
                            <?php if($ofertas_rand !== FALSE): ?>
                              <?php 
                                foreach($ofertas_rand as $row): 
                                $url  = "/ofertas/";
                                $url .= $row->name_category . "/";
                                $url .= $row->id;
                              ?>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 xs580Max_width_100" style="margin-bottom:10px;">
                                <div class="ctn" style="margin-bottom:10px; width:100%; max-width:400px; margin-left:auto; margin-right:auto; display:block;">
                                    <a href="<?php echo $url; ?>">
                                        <img src="/assets/images/banner/ofertas/<?php echo $row->image; ?>" class="img-responsive">
                                        <div class="infoAdvert">
                                            <h2 class="titleGlobal"><?php echo $row->title; ?></h2>
                                            <?php echo  character_limiter($row->description, 75); ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                              <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </div><!--End row-->
                    </div><!--End col-xs-12-->
                </div><!--End row-->
            </div>  <!--End container--> 
            <!--End Ofertas relacionadas-->
                      
             
             
        </div><!--End row-->     
    </div><!--End container-->
</section><!--End head_3-->

