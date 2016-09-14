<!--   ------------- footer -------------  --> 
            <footer>
                <div id="footer-top">
                    <div class="container">
                        <h4 class="text-center">Wir sind für Sie da</h4>
                        <ul class="no-padding">
                            <li class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0" data-toggle="modal" data-target="#contact-modal">
                                <span class="pull-left icon icon-phone"></span>
                                <span class="pull-left text">
                                    <span class="uppercase">0391/ 55 99 10 91</span>
                                    <span class="small">
                                        <i>Für alle, die lieber sprechen.</i>
                                    </span>
                                </span>    
                            </li>
                            <li class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0" data-toggle="modal" data-target="#contact-modal">
                                <span class="pull-left icon icon-mail"></span>
                                <span class="pull-left text">
                                    <span class="uppercase">E-mail</span>
                                    <span class="small">
                                        <i>Für alle, die lieber schreiben.</i>
                                    </span>
                                </span>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0" data-toggle="modal" data-target="#appointment-modal">
                                <span class="pull-left icon icon-calendar"></span>
                                    <span class="pull-left text">
                                        <span class="uppercase">Terminvereinbarung</span>
                                        <span class="small">
                                            <i>Sichern Sie sich gleich einen Termin.</i>
                                        </span>
                                    </span>
                            </li>
                            <span class="clearfix"></span>
                        </ul>
                    </div><!-- end .container -->
                </div><!-- end #footer-top -->
                <div id="footer-bottom" class="text-center">
                    <div id="footer-socials">
                        <p class="">Tun Sie Ihrer Wirbelsäule etwas Gutes!</p>
                            
                        <!-- for future usage -->
                        <!-- <ul class="no-padding">
                            <li>
                                <a href="#">
                                    <span class="icon-simple facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-simple rss-feed"></span>
                                </a>
                            </li>    
                        </ul> -->
                    </div><!-- end #footer-socials -->
                    <div id="footer-legals" class="">
                        <ul class="no-padding">
                            <li><a href="<?php echo get_page_link(26)#; ?>#">Impressum</a></li>
                            <li><a href="datenschutz.html">Datenschutz</a></li>
                        </ul>
                    </div><!-- end footer-legals -->
                    <div id="footer-contacts">
                        <img class="img img-responsive" src="<?php bloginfo('template_url');?>/images/logo-big.png" alt="Chiro MD" title="" height="" width="">
                        <address>
                            <b>Ihre Chiropraxis Kuhlen</b><br>
                             Breiter Weg 252, 39104 Magdeburg<br>
                            0391 / 55 99 10 91 
                        </address>
                        <div class="clearfix"></div>
                    </div><!-- end footer-contacts -->
                </div><!-- end #footer-bottom -->
               <div class="clearfix"></div>
           </footer>
           
            <!-- ------------- modals ------------- -->
            <!-- #contact-modal -->
            <div class="modal fade" id="contact-modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <span class="icon icon-phone"></span>
                            <h4 class="uppercase col-sm-10 col-md-8">
                                Kontakt//
                                <span>Ihre Verbindung zu uns.</span> 
                                <span>Persönlich. telefonisch. online.</span> 
                            </h4>
                        </div>
                        <div class="modal-body col-sm-10 col-md-8">
                            <address>
                                <h5>CHIRO | MD</h5>
                                Breiter Weg 252<br>
                                39104 Magdeburg<br><br>
                                <span>Tel.:</span>	0391 / 55 99 10 91 <br>
                                <span>Mobil:</span>	01525 / 214 72 32<br><br>
                                <span>E-Mail: &nbsp; </span><a href="mailto:info@chiromd.de">info@chiromd.de</a>
                            </address>
                            <h4 class="uppercase">
                                Sie haben Fragen?
                                <span>Schreiben Sie uns.</span> 
                            </h4>
							<?php # echo do_shortcode( '[contact-form-7 id="78" title="Kontaktformular 1"]' ); ?>
							<?php echo do_shortcode( '[contact-form-7 id="79" title="kontakt"]' ); ?>
                          <!-- <form role="form" class="row">
                            <div class="form-group col-sm-6">
                              <input type="text" class="form-control" id="name" placeholder="Ihr Vorname/ Nachname">
                            </div>
                            <div class="form-group col-sm-6">
                              <input type="email" class="form-control" id="email" placeholder="Ihre E-Mail-Adresse">
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea placeholder="Ihre Nachricht an uns"></textarea>
                            </div>
                            <div class="col-sm-12 btn-holder"> 
                                <button type="submit" class="btn btn-default pull-right">Nachricht absenden</button>
                                <div class="clearfix"></div>  
                            </div> 
                            
							  
                          </form> -->
							
							
                        </div><!-- end .modal-body -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- end .modal --> 
            
            <!-- #appointment-modal -->
            <div class="modal fade" id="appointment-modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <span class="icon icon-calendar"></span>
                            <h4 lang="de" class="uppercase">
                                Terminvereinbarung//
                                <!-- for future usage -->
                                <!-- <span>Jetzt online Termin vereinbaren.</span> --> 
                                <!-- temp replacement for usage without btn : -->
                                <span>Jetzt Termin vereinbaren: 0391 / 55 99 10 91<br> 
                                    Mobil: 01525 / 214 72 32
                                </span>
                                <span class="btn-dark-stripe pull-right">
                                    <a class="btn-dark btn btn-default">
                                        Termin finden 
                                        <span class="icon icon-arrow-right"></span>
                                    </a>
                                </span>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-12 col-md-5 col-lg-6 image-holder pull-left">                           </div>
                            <div class="clearfix visible-xs"></div>
                            <div class="col-sm-12 col-md-7 col-lg-6 opening-hours">
                                <h5><em>Unsere Öffnungszeiten</em></h5>
                                <hr>
                                <div class="col-sm-5 col-md-4">
                                    <span class="icon icon-monday"></span>
                                    <span class="icon icon-tuesday"></span>
                                    <span class="icon icon-thursday"></span>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <span>10:00 - 19:00 Uhr</span>
                                    <div class="uppercase">Montag / Dienstag / Donnerstag</div>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-sm-5 col-md-4">
                                    <span class="icon icon-wednesday"></span>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <span>10:00 - 19:00 Uhr</span>
                                    <div class="uppercase">Mittwoch</div>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-sm-5 col-md-4">
                                    <span class="icon icon-friday"></span>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <span>08:00 - 14:00 Uhr</span>
                                    <div class="uppercase">Freitag</div>
                                </div>
                                
                            </div> 
                            
                            <div class="clearfix"></div>
                            <p class="col-sm-10">Bitte beachten Sie, dass die Behandlungskosten nicht von den gesetzlichen Krankenkassen übernommen werden. Abhängig von der gesetzlichen Krankenkasse sind jedoch Teilübernahmen möglich. Die meisten private Krankenversicherungen und entsprechende Zusatzversicherungen für gesetzlich Versicherte übernehmen die Kosten. Bitte erkundigen Sie sich bei Ihrer Krankenversicherung über die Kostenübernahme – wir beraten Sie gern. Wir rechnen nach Heilpraktiker-Gebührenordnung (GebüH) ab. </p>
                            <div class="clearfix"></div>
                        </div><!-- end .modal-body -->
                            
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- end .modal #appointment-modal --> 
           
            <!-- #news-modal  -->
            <div class="modal fade" id="news-modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <span class="icon icon-bell"></span>
                            <h4 class="uppercase">
                                Aktuelles &amp; Wissenswertes//
                                <span>Hier finden Sie News rund um Chiro | MD</span> 
                            </h4>
                        </div>
                        <div class="modal-body">
                            <!-- #accordion-news -->
                            <div class="panel-group" id="accordion-news" role="tablist" aria-multiselectable="true">
                              <div class="panel">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h5 class="panel-title">
                                    <a class="uppercase" role="button" data-toggle="collapse" data-parent="#accordion-news" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <span class="muted">am 04. Oktober 2016</span>
                                      <span>Praxiseröffnung</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    <div class="col-sm-4 img-holder">
                                        <img src="<?php bloginfo('template_url');?>/images/news-modal-article-1.jpg" class="" alt="" title="">
                                    </div>
                                    <div class="col-sm-8 text-content">
                                        <p>Endlich ist es soweit! Chiro | MD - Ihre Chiropraxis Kuhlen ist ab Anfang Oktober nur für Sie da. Verabschieden Sie sich von Rückenschmerzen &amp; Co. Sagen Sie "Hallo" zu mehr Lebensqualität.</p>
                                        <p>Erwarten Sie von Ihrer Chiropraktorin ein umfassendes Hochschulstudium mit mehrjähriger Assistenzzeit sowie einschlägiger Berufspraxis.</p>
                                        <p>Machen Sie sich selbst ein Bild über unsere Praxis am Breiten Weg 252 in Magdeburg und vereinbaren Sie noch heute einen Termin! Vorab Termin sichern unter: 01525 / 214 72 32.</p>
                                        
                                         <span class="">
                                            <a class="btn btn-default btn-simple">
                                                <span class="icon-simple rss-feed inverted"></span>
                                                Mehr <span class="hidden-xs">dazu</span> im Blog
                                            </a>
                                        </span>
                                    </div>  
                                  </div><!-- end .panel-body -->
                                </div>
                              </div>
                              <div class="panel">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h5 class="panel-title">
                                    <a class="collapsed uppercase" role="button" data-toggle="collapse" data-parent="#accordion-news" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="muted">bald</span>
                                        <span>Tag der Offenen Tür</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    <div class="col-sm-4 img-holder">
                                        <img src="<?php bloginfo('template_url');?>/images/news-modal-article-1-empty.jpg" class="" alt="" title="">
                                    </div>
                                    <div class="col-sm-8 text-content">
                                        <p>Wir wissen, dass Sie neugierig sind. Wir sind es auch - auf Sie! Der Tag der offenen Tür ist in Planung. Sobald der Termin feststeht, finden Sie alle Infos dazu an dieser Stelle.</p>
                                        <p>Wir freuen uns schon jetzt auf Sie!</p>
                                         <span class="">
                                            <a class="btn btn-default btn-simple">
                                                <span class="icon-simple rss-feed inverted"></span>
                                                Mehr <span class="hidden-xs">dazu</span> im Blog
                                            </a>
                                        </span>
                                    </div>  
                                  </div>
                                </div>
                              </div> 
                              <!--<div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                  <h5 class="panel-title">
                                    <a class="collapsed uppercase" role="button" data-toggle="collapse" data-parent="#accordion-news" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      <span class="muted">am 17. Juli 2016</span>    
                                      <span>Überschrift Artikel 3</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    <div class="col-sm-4 img-holder">
                                        <img src="<?php bloginfo('template_url');?>/images/news-modal-article-1.jpg" class="" alt="" title="">
                                    </div>
                                    <div class="col-sm-8 text-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Semagni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum qui</p>
                                        
                                         <span class="">
                                            <a class="btn btn-default btn-simple">
                                                <span class="icon-simple rss-feed inverted"></span>
                                                Mehr <span class="hidden-xs">dazu</span> im Blog
                                            </a>
                                        </span>
                                    </div>  
                                  </div>
                                </div>
                              </div>--> 
                              <!-- <div class="panel">
                                <div class="panel-heading" role="tab" id="headingFour">
                                  <h5 class="panel-title">
                                    <a class="collapsed uppercase" role="button" data-toggle="collapse" data-parent="#accordion-news" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                      <span class="muted">am 17. Juli 2016</span>
                                      <span>Überschrift Artikel 4</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    <div class="col-sm-4 img-holder">
                                        <img src="<?php bloginfo('template_url');?>/images/news-modal-article-1.jpg" class="" alt="" title="">
                                    </div>
                                    <div class="col-sm-8 text-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Semagni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum qui</p>
                                        
                                         <span class="">
                                            <a class="btn btn-default btn-simple">
                                                <span class="icon-simple rss-feed inverted"></span>
                                                Mehr <span class="hidden-xs">dazu</span> im Blog
                                            </a>
                                        </span>
                                    </div>  
                                  </div>
                                </div>
                              </div> -->  
                            </div><!-- end #accordion-news --> 
                            
                            <span class="btn-dark-stripe-none pull-right">
                                    <a class="btn-dark btn btn-default">
                                        Alle Artikel anzeigen
                                        <span class="icon icon-arrow-right"></span>
                                    </a>
                            </span>
                            
                        </div><!-- end .modal-body -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- end .modal #news-modal --> 
            
            
            
            <!-- JavaScript, jQuery - scripts for end of body-tag  -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
           <!-- uses for bs carousel on index page -->
           <script src="<?php bloginfo('template_url');?>/js/jquery.touchSwipe.min.js"></script>
           <script>
               $("#practice-carousel").swipe( {
                swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
                    if(direction=='left'){
                        $(this).carousel('next');
                    }else if(direction=='right'){
                        $(this).carousel('prev');
                    }
                }
              });
           </script>
           <!-- used for top .navbar li to show .active state -->
           <script>
                //$(".navbar a").on("click", function(){
                   //$(".nav").find(".active").removeClass("active");
                   //$(this).parent().addClass("active");
                //});
			   $(function() {
  					$('.wpcf7-form').addClass('row');
			   });
           </script>
	   </div>
		<?php wp_footer(); ?> 
    </body>
</html>