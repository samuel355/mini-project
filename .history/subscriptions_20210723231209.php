<?php include('./includes/head.php') ?>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include('./includes/header.php') ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.html">Admin Dashboard</a></li>
									<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="chat.html">Chat</a></li>
									<li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="voice-call.html">Voice Call</a></li>
											<li><a href="video-call.html">Video Call</a></li>
											<li><a href="outgoing-call.html">Outgoing Call</a></li>
											<li><a href="incoming-call.html">Incoming Call</a></li>
										</ul>
									</li>
									<li><a href="events.html">Calendar</a></li>
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="inbox.html">Email</a></li>
									<li><a href="file-manager.html">File Manager</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Employees</span>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="employees.html">All Employees</a></li>
									<li><a href="holidays.html">Holidays</a></li>
									<li><a href="leaves.html">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
									<li><a href="leaves-employee.html">Leaves (Employee)</a></li>
									<li><a href="leave-settings.html">Leave Settings</a></li>
									<li><a href="attendance.html">Attendance (Admin)</a></li>
									<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
									<li><a href="departments.html">Departments</a></li>
									<li><a href="designations.html">Designations</a></li>
									<li><a href="timesheet.html">Timesheet</a></li>
									<li><a href="overtime.html">Overtime</a></li>
								</ul>
							</li>
							<li> 
								<a href="clients.html"><i class="la la-users"></i> <span>Clients</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="projects.html">Projects</a></li>
									<li><a href="tasks.html">Tasks</a></li>
									<li><a href="task-board.html">Task Board</a></li>
								</ul>
							</li>
							<li> 
								<a href="leads.html"><i class="la la-user-secret"></i> <span>Leads</span></a>
							</li>
							<li> 
								<a href="tickets.html"><i class="la la-ticket"></i> <span>Tickets</span></a>
							</li>
							<li class="menu-title"> 
								<span>HR</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="estimates.html">Estimates</a></li>
									<li><a href="invoices.html">Invoices</a></li>
									<li><a href="payments.html">Payments</a></li>
									<li><a href="expenses.html">Expenses</a></li>
									<li><a href="provident-fund.html">Provident Fund</a></li>
									<li><a href="taxes.html">Taxes</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="salary.html"> Employee Salary </a></li>
									<li><a href="salary-view.html"> Payslip </a></li>
									<li><a href="payroll-items.html"> Payroll Items </a></li>
								</ul>
							</li>
							<li> 
								<a href="policies.html"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="expense-reports.html"> Expense Report </a></li>
									<li><a href="invoice-reports.html"> Invoice Report </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Performance</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="performance-indicator.html"> Performance Indicator </a></li>
									<li><a href="performance.html"> Performance Review </a></li>
									<li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="goal-tracking.html"> Goal List </a></li>
									<li><a href="goal-type.html"> Goal Type </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="training.html"> Training List </a></li>
									<li><a href="trainers.html"> Trainers</a></li>
									<li><a href="training-type.html"> Training Type </a></li>
								</ul>
							</li>
							<li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
							<li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
							<li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
							<li class="menu-title"> 
								<span>Administration</span>
							</li>
							<li> 
								<a href="assets.html"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="jobs.html"> Manage Jobs </a></li>
									<li><a href="job-applicants.html"> Applied Candidates </a></li>
								</ul>
							</li>
							<li> 
								<a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
							</li>
							<li> 
								<a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
							</li>
							<li> 
								<a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
							</li>
							<li> 
								<a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="profile.html"> Employee Profile </a></li>
									<li><a href="client-profile.html"> Client Profile </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="login.html"> Login </a></li>
									<li><a href="register.html"> Register </a></li>
									<li><a href="forgot-password.html"> Forgot Password </a></li>
									<li><a href="otp.html"> OTP </a></li>
									<li><a href="lock-screen.html"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="subscriptions.html"> Subscriptions (Admin) </a></li>
									<li><a href="subscriptions-company.html"> Subscriptions (Company) </a></li>
									<li><a href="subscribed-companies.html"> Subscribed Companies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="search.html"> Search </a></li>
									<li><a href="faq.html"> FAQ </a></li>
									<li><a href="terms.html"> Terms </a></li>
									<li><a href="privacy-policy.html"> Privacy Policy </a></li>
									<li><a href="blank-page.html"> Blank Page </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.html"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
									<li><a href="form-validation.html"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							<li> 
								<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
							</li>
							<li> 
								<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						
						<div class="row">
							<div class="col">
								<h3 class="page-title">Subscriptions</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Subscriptions</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_plan"><i class="fa fa-plus"></i> Add Subscription</a>
							</div>
						</div>
		  
				
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-lg-10 mx-auto">
						
							<!-- Plan Tab -->
							<div class="row justify-content-center mb-4">
								<div class="col-auto">
									<nav class="nav btn-group">
										<a href="#monthly" class="btn btn-outline-secondary active show" data-toggle="tab">Monthly Plan</a>
										<a href="#annual" class="btn btn-outline-secondary" data-toggle="tab">Annual Plan</a>
									</nav>
								</div>
							</div>
							<!-- /Plan Tab -->

							<!-- Plan Tab Content -->
							<div class="tab-content">
							
								<!-- Monthly Tab -->
								<div class="tab-pane fade active show" id="monthly">
								
									<div class="row mb-30 equal-height-cards">
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Free</h3>
														<span class="display-4">$0</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>1 User</b></li>
														<li><i class="fa fa-check"></i> 5 Projects </li>
														<li><i class="fa fa-check"></i> 5 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Professional</h3>
														<span class="display-4">$21</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>30 Users</b></li>
														<li><i class="fa fa-check"></i> 50 Projects</li>
														<li><i class="fa fa-check"></i> 100 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Enterprise</h3>
														<span class="display-4">$38</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
														<li><i class="fa fa-check"></i> Unlimited Projects</li>
														<li><i class="fa fa-check"></i> 500 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> Voice and Video Call</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Monthly Plan Details -->
									<div class="row">
										<div class="col-md-12">
											<div class="card card-table mb-0">
												<div class="card-header">
													<h4 class="card-title mb-0">Plan Details</h4>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Plan</th>
																	<th>Plan Type</th>
																	<th>Create Date</th>
																	<th>Modified Date</th>
																	<th>Amount</th>
																	<th>Subscribed Users</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Free Trial</td>
																	<td>Monthly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>Free</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">30 Users</a></td>
																</tr>
																<tr>
																	<td>Professional</td>
																	<td>Monthly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$21</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">97 Users</a></td>
																</tr>
																<tr>
																	<td>Enterprise</td>
																	<td>Monthly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$38</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">125 Users</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Monthly Plan Details -->
								
								</div>
								<!-- /Monthly Tab -->
								
								<!-- Annual Plan Tab -->
								<div class="tab-pane fade" id="annual">
									<div class="row mb-30 equal-height-cards">
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Free</h3>
														<span class="display-4">$0</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>1 User</b></li>
														<li><i class="fa fa-check"></i> 5 Projects </li>
														<li><i class="fa fa-check"></i> 5 GB Storage</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Professional</h3>
														<span class="display-4">$199</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>30 Users</b></li>
														<li><i class="fa fa-check"></i> 50 Projects</li>
														<li><i class="fa fa-check"></i> 100 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Enterprise</h3>
														<span class="display-4">$399</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
														<li><i class="fa fa-check"></i> Unlimited Projects</li>
														<li><i class="fa fa-check"></i> 500 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> Voice and Video Call</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Yearly Plan Details -->
									<div class="row">
										<div class="col-md-12">
											<div class="card card-table mb-0">
												<div class="card-header">
													<h4 class="card-title mb-0">Plan Details</h4>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Plan</th>
																	<th>Plan Type</th>
																	<th>Create Date</th>
																	<th>Modified Date</th>
																	<th>Amount</th>
																	<th>Subscribed Users</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Free Trial</td>
																	<td>Yearly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>Free</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">62 Users</a></td>
																</tr>
																<tr>
																	<td>Professional</td>
																	<td>Yearly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$199</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">157 Users</a></td>
																</tr>
																<tr>
																	<td>Enterprise</td>
																	<td>Yearly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$399</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">241 Users</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Yearly Plan Details -->
								
								</div>
								<!-- /Annual Plan Tab -->
								
							</div>
							<!-- /Plan Tab Content -->
						  
							<!-- Add Plan Modal -->
							<div class="modal custom-modal fade" id="add_plan" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-md modal-dialog-centered">
									<div class="modal-content">
										<button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
										<div class="modal-body">
											<h5 class="modal-title text-center mb-3">Add Plan</h5>
											<form>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Name</label>
															<input type="text" placeholder="Free Trial" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Amount</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Type</label>
															<select class="select"> 
																<option> Monthly </option>
																<option> Yearly </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Users</label>
															<select class="select"> 
																<option> 5 Users </option>
																<option> 50 Users </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Projects</label>
															<select class="select"> 
																<option> 5 Projects </option>
																<option> 50 Projects </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Storage Space</label>
															<select class="select"> 
																<option> 5 GB </option>
																<option> 100 GB </option>
																<option> 500 GB </option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Plan Description</label>
													<textarea class="form-control" rows="4" cols="30"></textarea>
												</div>
												<div class="form-group">
													<label class="d-block">Status</label>
													<div class="status-toggle">
														<input type="checkbox" id="add_plan_status" class="check">
														<label for="add_plan_status" class="checktoggle">checkbox</label>
													</div>
												</div>
												<div class="m-t-20 text-center">
													<button class="btn btn-primary submit-btn">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Add Plan Modal -->

							<!-- Edit Plan Modal -->
							<div class="modal custom-modal fade" id="edit_plan" role="dialog">
								<div class="modal-dialog modal-md modal-dialog-centered">
									<div class="modal-content">
										<button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
										<div class="modal-body">
											<h5 class="modal-title text-center mb-3">Edit Plan</h5>
											<form>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Name</label>
															<input type="text" placeholder="Free Trial" class="form-control" value="Free Trial">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Amount</label>
															<input type="text" class="form-control" value="$500">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Type</label>
															<select class="select"> 
																<option> Monthly </option>
																<option> Yearly </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Users</label>
															<select class="select"> 
																<option> 5 Users </option>
																<option> 50 Users </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Projects</label>
															<select class="select"> 
																<option> 5 Projects </option>
																<option> 50 Projects </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Storage Space</label>
															<select class="select"> 
																<option> 5 GB </option>
																<option> 100 GB </option>
																<option> 500 GB </option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Plan Description</label>
													<textarea class="form-control" rows="4" cols="30"></textarea>
												</div>
												<div class="form-group">
													<label class="d-block">Status</label>
													<div class="status-toggle">
														<input type="checkbox" id="edit_plan_status" class="check">
														<label for="edit_plan_status" class="checktoggle">checkbox</label>
													</div>
												</div>
												<div class="m-t-20 text-center">
													<button class="btn btn-primary submit-btn">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Edit Plan Modal -->
						  
						</div>
					</div>
					
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>