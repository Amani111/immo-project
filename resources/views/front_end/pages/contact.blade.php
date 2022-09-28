@extends('front_end.layouts.app')

@section('title','contact')

@section('content')

    <!--=============================================
	=            breadcrumb area         =
	=============================================-->

    <div class="breadcrumb-area pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb container  =======-->

                    <div class="breadcrumb-container">
                        <nav>
                            <ul>
                                <li class="parent-page"><a href="index.html">Accueil</a></li>
                                <li>Contact</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->
<!--=============================================
	=            Contact page content         =
	=============================================-->

	<div class="page-content mb-5">



		<div class="container">
			<div class="row">
				<div class="col-lg-5 offset-lg-1 col-md-12 mb-sm-45 order-1 order-lg-2 mb-md-45">
					<!--=======  contact page side content  =======-->

					<div class="contact-page-side-content">
						<h3 class="contact-page-title">Contactez Nous</h3>
						<p class="contact-page-message mb-30">Claritas est etiam processus dynamicus, qui sequitur mutationem
							consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit
							litterarum formas human.</p>
						<!--=======  single contact block  =======-->

						<div class="single-contact-block">
							<h4><i class="fa fa-fax"></i> Address</h4>
							<p>IMM, cercle des bureaux centre urbain nord tunis 1082 </p>
						</div>

						<!--=======  End of single contact block  =======-->

						<!--=======  single contact block  =======-->

						<div class="single-contact-block">
							<h4><i class="fa fa-phone"></i> Téléphone</h4>
							<p>téléphone:(216) 71 822 371</p>

						</div>

						<!--=======  End of single contact block  =======-->

						<!--=======  single contact block  =======-->

						<div class="single-contact-block">
							<h4><i class="fa fa-envelope-o"></i> Email</h4>
							<p>contact@i-d-com.com</p>

						</div>

						<!--=======  End of single contact block  =======-->
					</div>

					<!--=======  End of contact page side content  =======-->

				</div>
				<div class="col-lg-6 col-md-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->

					<div class="contact-form-content">
						{{-- <h3 class="contact-page-title"> Message</h3> --}}

						<div class="contact-form">
							<form id="contact-form" action="https://whizthemes.com/mail-php/jaber/contact.php" method="post">
								<div class="form-group">
									<label>Nom <span class="required">*</span></label>
									<input type="text" name="name" id="customername" required>
								</div>
								<div class="form-group">
									<label> Email <span class="required">*</span></label>
									<input type="email" name="email" id="customerEmail" required>
								</div>
								<div class="form-group">
									<label>Subject</label>
									<input type="text" name="subject" id="contactSubject">
								</div>
								<div class="form-group">
									<label>votre Message</label>
									<textarea name="message" id="contactMessage"></textarea>
								</div>
								<div class="form-group mb-0">
									<button type="submit" value="submit" id="submit" class="fl-btn" name="submit">envoyer</button>
								</div>
							</form>
						</div>
						<p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
					</div>

					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
        <!--=============================================
		=            google map container         =
		=============================================-->
        <div class="google-map-container mb-45">
			<div id="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.788992264231!2d10.196481514642086!3d36.84752927273498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd352f8b41f7b7%3A0x63a38950ead4c7a9!2sidcom!5e0!3m2!1sfr!2stn!4v1664180635545!5m2!1sfr!2stn" width="1350" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
		</div>

		<!--=====  End of google map container  ======-->


	</div>

	<!--=====  End of Contact page content  ======-->


@endsection
