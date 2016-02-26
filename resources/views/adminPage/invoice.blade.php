@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Invoice</h1>
				<div class="btn-group">
					<a class="btn" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">Sample Pages</a>
				<a href="#" class="current">Invoice</a>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-th-list"></i>
							</span>
							<h5>Invoice</h5>
							<div class="buttons">
								<a title="Icon Title" class="btn" href="#"><i class="fa fa-shopping-cart"></i> <span class="text">Pay Now</span></a>
								<a title="Icon Title" class="btn" href="#"><i class="fa fa-print"></i> <span class="text">Print</span></a>
							</div>
						</div>
						<div class="widget-content">
							<div class="invoice-content">
								<div class="invoice-head">
									<div class="invoice-meta">
										Invoice <span class="invoice-number">#96558 </span><span class="invoice-date">Date: 2012-07-15</span>
									</div>
									<h5>Invoice Title/Subject</h5>
									<div class="invoice-from">
										<ul>
											<li>
												<span><strong>From</strong></span>
												<span>ANA Solutions</span>
												<span>244, Soranda Street,</span>
												<span>New Morleno.</span>
											</li>
										</ul>
									</div>
									<div class="invoice-to">
										<ul>
											<li>
												<span><strong>To</strong></span>
												<span>Mihaki Technologies</span>
												<span>233/44, Autumn Lane</span>
												<span>Treyan.</span>
											</li>
										</ul>
									</div>
								</div>
								<div>
									<table class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
												<th>
													Transaction Id
												</th>
												<th>
													Title
												</th>
												<th>
													Amount
												</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th class="total-label" colspan="2">
													Total:
												</th>
												<th class="total-amount">
													$920.00
												</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td>
													#43
												</td>
												<td>
													Vivamus sed auctor nibh congue, ligula
												</td>
												<td>
													$20.00
												</td>
											</tr>
											<tr>
												<td>
													#44
												</td>
												<td>
													Proin porttitor bibendum placerat.
												</td>
												<td>
													$500.00
												</td>
											</tr>
											<tr>
												<td>
													#45
												</td>
												<td>
													Lorem ipsum dolor sit amet, consectetur.
												</td>
												<td>
													$30.00
												</td>
											</tr>
											<tr>
												<td>
													#46
												</td>
												<td>
													Esta rata in doleur.
												</td>
												<td>
													$30.00
												</td>
											</tr>
											<tr>
												<td>
													#47
												</td>
												<td>
													Larta mida eno mosque teria.
												</td>
												<td>
													$340.00
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<p class="amount-word">
									Amount in Word: <span>Nine Hundred Twenty Dollars</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@stop
