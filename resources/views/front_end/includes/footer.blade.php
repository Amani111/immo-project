<!--=============================================
	=            footer         =
	=============================================-->
<div class="footer-container">
    <!--=======  footer navigation  =======-->

    <div class="footer-navigation pt-40 pb-20 pb-lg-40 pt-sm-30 pb-sm-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <!--=======  address block  =======-->

                    <div class="address-block">
                        <div class="image">
                            <a href="{{route('/')}}">
                                <img width="186" height="53"  src="{{asset('front-end/images/LOgo1-removebg-preview.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="address-text">
                            <ul>
                                <li>Address: IMM, cercle des bureaux centre urbain nord tunis 1082 </li>
                                <li>téléphone: (216) 71 822 371</li>
                                <li>Fax: (216)  71 822 371</li>
                                <li>Email: contact@mobilyacom.com.tn</li>
                            </ul>
                        </div>

                        <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100088165866244" class="facebook" data-tooltip="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/mobilyacom_tunis/" class="facebook" data-tooltip="instragram"><i
                                    class="fa fa-instagram"></i></a></li>
                                <li><a href="http://www.youtube.com/" class="facebook" data-tooltip="YouTube"><i
                                            class="fa fa-youtube"></i></a></li>

                            </ul>
                        </div>
                    </div>

                    <!--=======  End of address block  =======-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--=======  widget block  =======-->

                    <div class="widget-block">
                        <h4 class="footer-widget-title mb-sm-10">A PROPOS</h4>
                        <ul>
                            <li><a href="{{route('apropos')}}">Apropos</a></li>
                            <li><a href="{{route('Comment')}}">comment ça marche ?</a></li>
                            <li><a href="{{route('fqa')}}"> FAQ</a></li>    
                            {{-- <li><a href="#">Tunimeuble Services</a></li> --}}
                            <li><a href="{{route('contact')}}"> Nous Contacter</a></li>                  
                            <li><a href="{{route('pack')}}">Devenez un partenaire de mobilyacom</a></li>

                        </ul>
                    </div>

                    <!--=======  End of widget block  =======-->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!--=======  widget block  =======-->

                    <div class="widget-block">
                        <h4 class="footer-widget-title mt-sm-20 mb-sm-10"></h4>
                        <ul>
                            <li class="{{request()->is('/') ? 'active' : '' }}"><a href="{{route('/')}}">Accueil</a></li>
                            <li class="{{ request()->is('actualite*') ? 'active' : '' }}"><a href="{{route('actualite')}}">Actualité</a></li>
                            <li class="{{ request()->is('pack*') ? 'active' : '' }}"><a href="{{route('pack')}}">Pack</a></li>
                            <li class="{{ request()->is('showroomstuni*') ? 'active' : '' }}"><a href="{{route('showroomstuni')}}">Showroom</a></li>
                            <li class="{{ request()->is('showroomstuni*') ? 'active' : '' }}"><a href="{{route('showroomstuni')}}">Promotion</a></li>
                            <li>
                                <a href="{{route('contact')}}" class="parteunaire-btn">Contactez nous</a>
                        </li>
                        </ul>

                        <!--=======  newsletter formq  =======-->



                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->

                        <!--=======  End of newsletter formq  =======-->
                    </div>

                    <!--=======  End of widget block  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer navigation  =======-->

    <!--=======  footer copyright  =======-->

    <div class="footer-copyright pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-20 mb-md-0">
                    <!--=======  footer copyright text  =======-->

                    <div class="footer-copyright-text">
                        <p>Copyright &copy; <script>
                            document.write(new Date().getFullYear())
                          </script> <a href="#"></a>, All Rights Reserved.</p>
                    </div>

                    <!--=======  End of footer copyright text  =======-->
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--=======  payment logo  =======-->



                    <!--=======  End of payment logo  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer copyright  =======-->
</div>

<!--=====  End of footer  ======-->
