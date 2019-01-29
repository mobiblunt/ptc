@extends('header')

@section('title', 'Dashboard')

@section('content')
<div class="content">
                <div class="container-fluid">
                    @if (Sentinel::check() && Sentinel::inRole('administrator'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Alerts</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            @foreach($alert as $alt)
                                            <tr>
                                                <td>{{$alt->deposit->trans_id}}</td>
                                                <td>{{$alt->amount}} </td>
                                                <td>{{$alt->date_paid}}</td>
                                                
                                                
                                                
                                               
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/converter?fsym=BTC&tsyms=USD,GOLD,KRW,CNY';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                        </div>

                        <div class="col-md-4">
                            <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/tiles?fsym=BTC&tsyms=CNY,GOLD,KRW,USD,EUR,GBP,BTC';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                        </div>

                        <div class="col-md-4">
                            <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,XMR,LTC&tsyms=CNY,GOLD,KRW,USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                        </div>
                    </div>
<div class="row">
    <div class="col-md-12">
        <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v3/coin/chart?fsym=BTC&tsyms=CNY,GOLD,KRW,USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
    </div>
</div>
                    @else

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Equity</p>
                                    <h3 class="title">$ {{ $acct->dollars }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
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

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">local_atm</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Earnings</p>
                                    <h3 class="title">{{$acct->earnings}} <i class="fa fa-btc"></i></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/converter?fsym=BTC&tsyms=USD,GOLD,KRW,CNY';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                        </div>

                        <div class="col-md-4">
                            <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/tiles?fsym=BTC&tsyms=CNY,GOLD,KRW,USD,EUR,GBP,BTC';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                        </div>

                        <div class="col-md-4">
                            <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,XMR,LTC&tsyms=CNY,GOLD,KRW,USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                        </div>
                    </div>
<div class="row">
    <div class="col-md-12">
        <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v3/coin/chart?fsym=BTC&tsyms=CNY,GOLD,KRW,USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
    </div>
</div>
@endif
                </div>
            </div>
    

    <?php
        $user = Sentinel::findById(1);

        // var_dump(Activation::create($user));
    ?>

@stop