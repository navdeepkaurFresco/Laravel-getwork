@extends('superAdminlayout')
@section('content')
	<div class="app-content content">
		<div class="content-wrapper">
			<div class="content-header row">
		
			</div>
			<div class="content-body">
				
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-12">
					
						<a href=""><div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="info"></h3>
											<h6> Total  Subscribers </h6>
						
										</div>
										<div>
											<i class="icon-users info font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%"
											aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<a href=""><div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="warning"><i class="la la-rupee"></i></h3>
											<h6>Free Subscribers </h6>
										</div>
										<div>
											<i class="icon-users warning font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<a href=""><div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="success"></h3>
											<h6>Paid Subscribers</h6>
										</div>
										<div>
											<i class="icon-user-follow success font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<a href=""><div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="danger"></h3>
											<h6>Total Clients</h6>
										</div>
										<div>
											<i class="icon-tag danger font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div></a>
					</div>
				</div>
				<section id="ecommerce-stats">
					<div class="row">
						<div class="statics-title-row pull-up">
							<button type="button" class="btn btn-info btn-block btn-glow">
								Subscriber Activity Forum
							</button>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="card text-white bg-success bg-lighten-1">
								<div class="card-content collapse show">
									<div class="card-body">
                                        
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="row">
								<div class="col-lg-6 col-12">
									<a href=""><div class="card pull-up">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="media-body text-left">
														<h6 class="text-muted">Total Assessors</h6>
														<h3></h3>
													</div>
													<div class="align-self-center">
														<i class="icon-users success font-large-2 float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
								</div>
								<div class="col-lg-6 col-12">
									<div class="card pull-up">
										<a href="">
											<div class="card-content">
												<div class="card-body">
													<div class="media d-flex">
														<div class="media-body text-left"> 
															<h6 class="text-muted">Completed Taining Learners</h6>
															<h3></h3>
														</div>
														<div class="align-self-center">
															<i class="icon-trophy success font-large-2 float-right"></i>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-12 activity" style="height: 300px !important;">
									<div class="card">
										<div class="card-header bg-info">
											<h4 class="card-title">Activity Log</h4>
											<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
											<div class="heading-elements">
												<ul class="list-inline mb-0">
													<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="card-content collapse show bg-hexagons">
											<div id="new-orders" class="media-list position-relative">
												<table class="table">
													
															 </table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	<script src="/app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/gmaps.min.js" type="text/javascript"></script>
@endsection
	