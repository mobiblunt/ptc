@extends('header')

@section('title', 'Dashboard')

@section('content')
<div class="content">
                <div class="container-fluid">

                    @if($dat >= $acct->end_date)

                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><b> Notice - </b> Your trading period has ended, please subscribe to a new plan.</span>
                                    </div>
                            
                        </div>
                    </div>
                    @endif
                	<div class="card">
                	<div class="card-header" data-background-color="blue">
	                                <h3 class="title"> My Wallet</h3>
	                            </div>

	                           
	                            <br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Selected Plan</p>
                                    <h3 class="title">{{ $plan1->name }}<small></small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> Expires: {{ $acct->end_date }} 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Equity</p>
                                    <h3 class="title">$ {{ $acct->dollars }} </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-btc"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Investment</p>
                                    <h3 class="title">{{ $plan1->minimum }} <i class="fa fa-btc"></i></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                        	<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">local_atm</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Earnings</p>
                                    <h3 class="title">$ {{$acct->earnings}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">local_atm</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Owing</p>
                                    <h3 class="title">$ {{$acct->owing}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        	
                        </div>
                    </div>
                </div>
            </div>
             </div>

@stop