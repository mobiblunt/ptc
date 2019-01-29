@extends('header')

@section('title', 'Dashboard')

@section('content')
<div class="content">
                <div class="container-fluid">
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
                                    <h3 class="title">{{$acct->balance}} <i class="fa fa-btc"></i></h3>
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
                        
                        
                        	
                        </div>
                    </div>
                </div>
            </div>
             </div>

@stop