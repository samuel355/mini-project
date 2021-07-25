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
									<li><a class="active" href="client-profile.html"> Client Profile </a></li>
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
									<li><a href="subscriptions.html"> Subscriptions (Admin) </a></li>
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
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="">
													<img src="assets/img/profiles/avatar-19.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0">Global Technologies</h3>
														<h5 class="company-role m-t-0 mb-0">Barry Cuda</h5>
														<small class="text-muted">CEO</small>
														<div class="staff-id">Employee ID : CLT-0001</div>
														<div class="staff-msg"><a href="chat.html" class="btn btn-custom">Send Message</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href="">9876543210</a></span>
														</li>
														<li>
															<span class="title">Email:</span>
															<span class="text"><a href="">barrycuda@example.com</a></span>
														</li>
														<li>
															<span class="title">Birthday:</span>
															<span class="text">2nd August</span>
														</li>
														<li>
															<span class="title">Address:</span>
															<span class="text">5754 Airport Rd, Coosada, AL, 36020</span>
														</li>
														<li>
															<span class="title">Gender:</span>
															<span class="text">Male</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item col-sm-3"><a class="nav-link active" data-toggle="tab" href="#myprojects">Projects</a></li>
									<li class="nav-item col-sm-3"><a class="nav-link" data-toggle="tab" href="#tasks">Tasks</a></li>
								</ul>
							</div>
						</div>
					</div>

                    <div class="row">
                        <div class="col-lg-12"> 
							<div class="tab-content profile-tab-content">
								
								<!-- Projects Tab -->
								<div id="myprojects" class="tab-pane fade show active">
									<div class="row">
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li> 
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Projects Tab -->
								
								<!-- Task Tab -->
								<div id="tasks" class="tab-pane fade">
									<div class="project-task">
										<ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
											<li class="nav-item"><a class="nav-link active" href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
											<li class="nav-item"><a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
											<li class="nav-item"><a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane show active" id="all_tasks">
												<div class="task-wrapper">
													<div class="task-list-container">
														<div class="task-list-body">
															<ul id="task-list">
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient appointment booking</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Appointment booking with payment gateway</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="completed task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label">Doctor available module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient and Doctor video conferencing</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Private chat module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient Profile add</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
															</ul>
														</div>
														<div class="task-list-footer">
															<div class="new-task-wrapper">
																<textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
																<span class="error-message hidden">You need to enter a task first</span>
																<span class="add-new-task-btn btn" id="add-task">Add Task</span>
																<span class="btn" id="close-task-panel">Close</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="pending_tasks"></div>
											<div class="tab-pane" id="completed_tasks"></div>
										</div>
									</div>
								</div>
								<!-- /Task Tab -->
								
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
            </div>
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
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>