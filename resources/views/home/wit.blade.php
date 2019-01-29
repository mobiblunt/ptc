@extends('header')

@section('title', 'Withdrawal')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					
					<div class="card-content">
						<h4 class="title">Withdrawal Details</h4>

						<p class="category"><span class="text-success"> Transaction ID:  </span> {{ $wit->tran_id}}</p>
						<p class="category"><span class="text-success"> Status:  </span> {{ $wit->status }}</p>
						<p class="category"><span class="text-success"> Payment Option: {{ $wit->pay_option}}  </span> </p>
						
						<p class="category"><span class="text-success">Amount:  </span> {{ $wit->amount}}<i class="fa fa-bitcoin"></i></p>

						<p class="category"><span class="text-success">Address:  </span> {{ $wit->address}}</p>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">access_time</i> updated 4 minutes ago 
						</div>
					</div>
				</div>

			</div>
			
		</div>
	</div>


@stop