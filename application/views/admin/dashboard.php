<?php $this->load->view('admin/includes/header');?>
<?php $this->load->view('admin/includes/sideBar');?>
  <!-- Main Content -->
	<div class="main-content">
		<section class="section">
			<div class="row ">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-statistic-4">
							<div class="align-items-center justify-content-between">
								<div class="row ">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
										<div class="card-content">
											<h5 class="font-15">New Booking</h5>
											<h2 class="mb-3 font-18">258</h2>
											<p class="mb-0"><span class="col-green">10%</span> Increase</p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
										<div class="banner-img">
											<img src="<?=base_url().'assets/admin'?>/img/banner/1.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-statistic-4">
							<div class="align-items-center justify-content-between">
								<div class="row ">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
										<div class="card-content">
											<h5 class="font-15"> Customers</h5>
											<h2 class="mb-3 font-18">1,287</h2>
											<p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
										<div class="banner-img">
											<img src="<?=base_url().'assets/admin'?>/img/banner/2.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-statistic-4">
							<div class="align-items-center justify-content-between">
								<div class="row ">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
										<div class="card-content">
											<h5 class="font-15">New Project</h5>
											<h2 class="mb-3 font-18">128</h2>
											<p class="mb-0"><span class="col-green">18%</span>
												Increase</p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
										<div class="banner-img">
											<img src="<?=base_url().'assets/admin'?>/img/banner/3.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-statistic-4">
							<div class="align-items-center justify-content-between">
								<div class="row ">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
										<div class="card-content">
											<h5 class="font-15">Revenue</h5>
											<h2 class="mb-3 font-18">$48,697</h2>
											<p class="mb-0"><span class="col-green">42%</span> Increase</p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
										<div class="banner-img">
											<img src="<?=base_url().'assets/admin'?>/img/banner/4.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-12">
					<div class="card ">
						<div class="card-header">
							<h4>Revenue chart</h4>
							<div class="card-header-action">
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
										<a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
											Delete</a>
									</div>
								</div>
								<a href="#" class="btn btn-primary">View All</a>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-9">
									<div id="chart1"></div>
									<div class="row mb-0">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="list-inline text-center">
												<div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
														class="col-green"></i>
													<h5 class="m-b-0">$675</h5>
													<p class="text-muted font-14 m-b-0">Weekly Earnings</p>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="list-inline text-center">
												<div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
														class="col-orange"></i>
													<h5 class="m-b-0">$1,587</h5>
													<p class="text-muted font-14 m-b-0">Monthly Earnings</p>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="list-inline text-center">
												<div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
														class="col-green"></i>
													<h5 class="mb-0 m-b-0">$45,965</h5>
													<p class="text-muted font-14 m-b-0">Yearly Earnings</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="row mt-5">
										<div class="col-7 col-xl-7 mb-3">Total customers</div>
										<div class="col-5 col-xl-5 mb-3">
											<span class="text-big">8,257</span>
											<sup class="col-green">+09%</sup>
										</div>
										<div class="col-7 col-xl-7 mb-3">Total Income</div>
										<div class="col-5 col-xl-5 mb-3">
											<span class="text-big">$9,857</span>
											<sup class="text-danger">-18%</sup>
										</div>
										<div class="col-7 col-xl-7 mb-3">Project completed</div>
										<div class="col-5 col-xl-5 mb-3">
											<span class="text-big">28</span>
											<sup class="col-green">+16%</sup>
										</div>
										<div class="col-7 col-xl-7 mb-3">Total expense</div>
										<div class="col-5 col-xl-5 mb-3">
											<span class="text-big">$6,287</span>
											<sup class="col-green">+09%</sup>
										</div>
										<div class="col-7 col-xl-7 mb-3">New Customers</div>
										<div class="col-5 col-xl-5 mb-3">
											<span class="text-big">684</span>
											<sup class="col-green">+22%</sup>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-4">
					<div class="card">
						<div class="card-header">
							<h4>Chart</h4>
						</div>
						<div class="card-body">
							<div id="chart4" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<div class="card">
						<div class="card-header">
							<h4>Chart</h4>
						</div>
						<div class="card-body">
							<div class="summary">
								<div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
									<div id="chart3" class="chartsh"></div>
								</div>
								<div data-tab-group="summary-tab" id="summary-text">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<div class="card">
						<div class="card-header">
							<h4>Chart</h4>
						</div>
						<div class="card-body">
							<div id="chart2" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Setting Panel
					</div>
					<div class="p-15 border-bottom">
						<h6 class="font-medium m-b-10">Select Layout</h6>
						<div class="selectgroup layout-color w-50">
							<label class="selectgroup-item">
								<input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
								<span class="selectgroup-button">Light</span>
							</label>
							<label class="selectgroup-item">
								<input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
								<span class="selectgroup-button">Dark</span>
							</label>
						</div>
					</div>
					<div class="p-15 border-bottom">
						<h6 class="font-medium m-b-10">Sidebar Color</h6>
						<div class="selectgroup selectgroup-pills sidebar-color">
							<label class="selectgroup-item">
								<input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
								<span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
									data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
							</label>
							<label class="selectgroup-item">
								<input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
								<span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
									data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
							</label>
						</div>
					</div>
					<div class="p-15 border-bottom">
						<h6 class="font-medium m-b-10">Color Theme</h6>
						<div class="theme-setting-options">
							<ul class="choose-theme list-unstyled mb-0">
								<li title="white" class="active">
									<div class="white"></div>
								</li>
								<li title="cyan">
									<div class="cyan"></div>
								</li>
								<li title="black">
									<div class="black"></div>
								</li>
								<li title="purple">
									<div class="purple"></div>
								</li>
								<li title="orange">
									<div class="orange"></div>
								</li>
								<li title="green">
									<div class="green"></div>
								</li>
								<li title="red">
									<div class="red"></div>
								</li>
							</ul>
						</div>
					</div>
					<div class="p-15 border-bottom">
						<div class="theme-setting-options">
							<label class="m-b-0">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
									id="mini_sidebar_setting">
								<span class="custom-switch-indicator"></span>
								<span class="control-label p-l-10">Mini Sidebar</span>
							</label>
						</div>
					</div>
					<div class="p-15 border-bottom">
						<div class="theme-setting-options">
							<label class="m-b-0">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
									id="sticky_header_setting">
								<span class="custom-switch-indicator"></span>
								<span class="control-label p-l-10">Sticky Header</span>
							</label>
						</div>
					</div>
					<div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
						<a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
							<i class="fas fa-undo"></i> Restore Default
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('admin/includes/footer');?>
