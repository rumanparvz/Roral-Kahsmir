
@extends('layouts.app')
@section('container')
   <section class="page-banner" style="background: #121619 url(http://fasteats.xyz/content/website/images/blog-8.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">contact Us</h1>
						<ul>
							<li><a href="index.html" class="page-name">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
      </section>
      <section class="contact ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center">
						<p class="headding-sub">Get in touch</p>
						<h2 class="headding-titleContact text-uppercase font-weight-bold">contact us</h2>
					</div>
				</div>
			</div>
			<div class="contact-in">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-5">
						<div class="contact-detail">
							<h3 class="contact-head">Contact Details</h3>
							<p class="contact-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
							<ul>
								<li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:void(0)">30 Rue Pertinax, 06000 Nice</a></li>
								<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:1234567890">04 89 14 91 96</a></li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:support@pizzon.com">leroyalkashmir@gmail.com</a></li>
								{{-- <li>
									<i class="fa fa-clock-o" aria-hidden="true"></i>
									
									{{-- <ul class="footer-details footer-time">
			                           <li>Lundi: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
										<li>Mardi: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
										<li>Mercredi: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
										<li>Jeudi: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
										<li>Vendredi: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
										<li>Samedi: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
										<li>Dimanche: <span>12:00 - 14.30 et 18:00 - 23.30</span></li>
			                        </ul> --}}
								{{-- </li> --}} 
							</ul>
							<table class="table table-striped text-center">
								<thead class="Theader">
									<tr>
										<th>Day</th>
										<th>Open</th>
										<th>Close</th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-dark">
										<td>Lundi</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									<tr class="text-dark">
										<td>Mardi</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									<tr class="text-dark">
										<td>Mercredi</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									<tr class="text-dark">
										<td>Jeudi</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									<tr class="text-dark">
										<td>Vendredi</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									<tr class="text-dark">
										<td>Samedi</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									<tr class="text-dark">
										<td>Dimanche</td>
										<td><i class="far fa-clock clockOpen"></i> 2:00 - 14.30</td>
										<td><i class="far fa-clock clockClose"></i> 18:00 - 23.30</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-7 mt-5 pt-5">
						<div class="leave">
							<form>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xl-6">
										<div class="form-group">
											<input type="text" name="Phone" class="form-control" placeholder="Phone" required="">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<input type="text" name="Email" class="form-control" placeholder="Email" required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="text" name="Subject" class="form-control" placeholder="Subject" required="">
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Message"></textarea>
								</div>
								<input type="submit" name="submit" value="Send Message" class="post-com">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
      </section>
      <section class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1313.666598153709!2d7.26555052437191!3d43.70495255235509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cddaa83ac20479%3A0xe096f8831c015b44!2sRoyal%20Kashmir!5e0!3m2!1sen!2sbd!4v1638437976408!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
@endsection

