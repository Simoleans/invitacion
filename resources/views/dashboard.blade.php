@extends('layouts.app')

@section('content')


              <div class="row">
              <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card bg-primary">
                  <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h3 class="font-large-1 mb-0">{{count($users)}}</h3>
                          <span>Usuarios</span>
                        </div>
                        <div class="media-right white text-right">
                          <i class="icon-user-following font-large-1"></i>
                        </div>
                      </div>
                    </div>
                    <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card bg-warning">
                  <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h3 class="font-large-1 mb-0">$2156</h3>
                          <span>Total Tax</span>
                        </div>
                        <div class="media-right white text-right">
                          <i class="icon-pie-chart font-large-1"></i>
                        </div>
                      </div>
                    </div>
                    <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card bg-success">
                  <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h3 class="font-large-1 mb-0">$45,668</h3>
                          <span>Total Sales</span>
                        </div>
                        <div class="media-right white text-right">
                          <i class="icon-graph font-large-1"></i>
                        </div>
                      </div>
                    </div>
                    <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card bg-danger">
                  <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h3 class="font-large-1 mb-0">$32,454</h3>
                          <span>Total Earning</span>
                        </div>
                        <div class="media-right white text-right">
                          <i class="icon-wallet font-large-1"></i>
                        </div>
                      </div>
                    </div>
                    <div id="Widget-line-chart4" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row match-height">
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title mb-0">Discover People</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media mb-3">
                        <img alt="96x96" class="media-object d-flex mr-3 align-self-center bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-12.png">
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-2 mb-0">Jessica Rice</h4>
                        </div>
                        <a class="d-flex ml-3 btn btn-raised btn-round gradient-blackberry py-2 width-150 justify-content-center white">Following</a>
                      </div>
                      <div class="media mb-3">
                        <img alt="96x96" class="media-object d-flex mr-3 align-self-center bg-danger height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-11.png">
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-2 mb-0">Jacob Rios</h4>
                        </div>
                        <a class="d-flex ml-3 btn btn-raised btn-round btn-outline-grey py-2 width-150 justify-content-center">Follow</a>
                      </div>
                      <div class="media mb-3">
                        <img alt="96x96" class="media-object d-flex mr-3 align-self-center bg-success height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png">
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-2 mb-0">Russell Diaz</h4>
                        </div>
                        <a class="d-flex ml-3 btn btn-raised btn-round btn-outline-grey py-2 width-150 justify-content-center">Follow</a>
                      </div>
                      <div class="media mb-3">
                        <img alt="96x96" class="media-object d-flex mr-3 align-self-center bg-warning height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-6.png">
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-2 mb-0">Sara Bell</h4>
                        </div>
                        <a class="d-flex ml-3 btn btn-raised btn-round gradient-blackberry py-2 width-150 justify-content-center white">Following</a>
                      </div>
                      <div class="media mb-3">
                        <img alt="96x96" class="media-object d-flex mr-3 align-self-center bg-info height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-18.png">
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-2 mb-0">Janet Lucas</h4>
                        </div>
                        <a class="d-flex ml-3 btn btn-raised btn-round btn-outline-grey py-2 width-150 justify-content-center">Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title mb-0">Sales Analysis</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <div class="chart-info mb-3">
                        <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                        <span class="text-uppercase mr-3"><i class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                        <span class="text-uppercase"><i class="fa fa-circle danger font-small-2 mr-1"></i> clicks</span>
                      </div>
                      <div id="line-chart1" class="height-350 lineChart1 lineChart1Shadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row match-height">
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-header text-center pb-0">
                    <span class="font-medium-2 primary">Steps</span>
                    <h3 class="font-large-2 mt-1">3261</h3>
                  </div>
                  <div class="card-content">
                    <div id="donut-chart1" class="height-250 donut1">
                    </div>
                    <div class="card-body text-center">
                      <span class="font-large-1 d-block mb-1">5000</span>
                      <span class="primary font-medium-1">Steps Today's Target</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-header text-center pb-0">
                    <span class="font-medium-2 warning">Distance</span>
                    <h3 class="font-large-2 mt-1">7.6
                      <span class="font-medium-1 grey darken-1 text-bold-400">miles</span>
                    </h3>
                  </div>
                  <div class="card-content">
                    <div id="donut-chart2" class="height-250 donut2">
                    </div>
                    <div class="card-body text-center">
                      <span class="font-large-1 d-block mb-1">10</span>
                      <span class="warning font-medium-1">Miles Today's Target</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-header text-center pb-0">
                    <span class="font-medium-2 danger">Calories</span>
                    <h3 class="font-large-2 mt-1">4,025
                      <span class="font-medium-1 grey darken-1 text-bold-400">kcal</span>
                    </h3>
                  </div>
                  <div class="card-content">
                    <div id="donut-chart3" class="height-250 donut3">
                    </div>
                    <div class="card-body text-center">
                      <span class="font-large-1 d-block mb-1">5000</span>
                      <span class="danger font-medium-1">kcla Today's Target</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row match-height">
              <div class="col-xl-6 col-lg-12 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-img">
                      <img class="card-img-top img-fluid height-300" src="app-assets/img/photos/weather-1.jpg" alt="Card image cap">
                      <h4 class="card-title">Sunny</h4>
                      <a class="btn btn-floating halfway-fab bg-primary"><i class="ft-plus"></i></a>
                    </div>
                    <div class="card-body mt-2">
                      <div class="row">
                        <div class="col-2 text-center">
                          <span class="d-block">Mon</span>
                          <i class="wi wi-day-sunny d-block warning font-large-1 my-3"></i>
                          <span class="d-block">13&deg;</span>
                        </div>
                        <div class="col-2 text-center">
                          <span class="d-block">Tue</span>
                          <i class="wi wi-day-cloudy d-block warning font-large-1 my-3"></i>
                          <span class="d-block">12&deg;</span>
                        </div>
                        <div class="col-2 text-center">
                          <span class="d-block">Wed</span>
                          <i class="wi wi-day-cloudy-gusts d-block warning font-large-1 my-3"></i>
                          <span class="d-block">10&deg;</span>
                        </div>
                        <div class="col-2 text-center">
                          <span class="d-block">Thu</span>
                          <i class="wi wi-day-cloudy-windy d-block warning font-large-1 my-3"></i>
                          <span class="d-block">12&deg;</span>
                        </div>
                        <div class="col-2 text-center">
                          <span class="d-block">Fri</span>
                          <i class="wi wi-day-fog d-block warning font-large-1 my-3"></i>
                          <span class="d-block">9&deg;</span>
                        </div>
                        <div class="col-2 text-center">
                          <span class="d-block">Sat</span>
                          <i class="wi wi-day-lightning d-block warning font-large-1 my-3"></i>
                          <span class="d-block">6&deg;</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h4 class="card-title">Statistics</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <div class="chart-info mb-2">
                        <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                        <span class="text-uppercase"><i class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                      </div>
                      <div id="line-chart2" class="height-350 lineChart2 lineChart2Shadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-3 match-height">
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="row d-flex mb-3 py-2">
                        <div class="col align-self-center text-center"><i class="icon-graph font-large-2 blue-grey lighten-2"></i></div>
                        <div class="col align-self-center"><img alt="96x96" class="bg-danger width-150 rounded-circle img-fluid"
                            src="app-assets/img/portrait/small/avatar-s-11.png"></div>
                        <div class="col align-self-center text-center"><i class="icon-envelope font-large-2 blue-grey lighten-2"></i></div>
                      </div>
                      <h3 class="font-large-1 text-center">Kevin Sullivan</h3>
                      <span class="font-medium-1 grey d-block text-center">UX Designer</span>
                      <div class="row mt-4 mb-3">
                        <div class="col-xl-7 col-8 ">
                          <div id="Widget-line-chart1" class="height-75 WidgetlineChart1 WidgetlineChart1Shadow px-2">
                          </div>
                        </div>
                        <div class="col-xl-5 col-4">
                          <span class="font-large-1"><i class="fa fa-caret-up font-large-2 success"></i> 27 %</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-img">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                            <img src="app-assets/img/photos/17.jpg" class="d-block w-100" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img src="app-assets/img/photos/13.jpg" class="d-block w-100" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img src="app-assets/img/photos/12.jpg" class="d-block w-100" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <a class="btn btn-floating halfway-fab btn-large gradient-blackberry"><i class="ft-plus"></i></a>
                    </div>
                    <div class="card-body mt-3">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Sweet halvah dragée jelly-o halvah carrot cake oat cake. Donut jujubes jelly chocolate
                        cake.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Earnings</h4>
                    <span class="grey">Mon 18 - Sun 21</span>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <div class="earning-details mb-4">
                        <h3 class="font-large-2 mb-1">$4295.36 <i class="ft-arrow-up font-large-2 teal accent-3"></i></h3>
                        <span class="font-medium-1 grey d-block">Total Earnings</span>
                      </div>
                      <div id="Widget-line-chart22" class="height-100 WidgetlineChart2 WidgetlineChart2Shadow">
                      </div>
                      <div class="action-buttons mt-4 mb-1 text-center">
                        <a class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2">View Full</a>
                        <a class="btn btn-raised btn-outline-grey py-2 px-3">Print</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row match-height">
              <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                <div class="card card-inverse bg-primary text-center">
                  <div class="card-content">
                    <div class="card-img overlap">
                      <img src="app-assets/img/elements/11.png" alt="element 06" width="190" class="mb-1">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">New Arrival</h4>
                      <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                <div class="card card-inverse bg-danger text-center">
                  <div class="card-content">
                    <div class="card-img overlap">
                      <img src="app-assets/img/elements/14.png" alt="element 03" width="170">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Brand Minute</h4>
                      <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                <div class="card card-inverse bg-warning text-center">
                  <div class="card-content">
                    <div class="card-img overlap">
                      <img src="app-assets/img/elements/07.png" alt="element 07" width="225">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Brand Minute</h4>
                      <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row match-height">
              <div class="col-xl-8 col-lg-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h4 class="card-title">Sales Per Visit</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <div class="chart-info mb-2">
                        <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                        <span class="text-uppercase"><i class="fa fa-circle warning font-small-2 mr-1"></i> Visits</span>
                      </div>
                      <div id="line-area-chart" class="height-300 lineAreaChart mb-1">
                        <!-- <x-chartist class="" [data]="lineAreaChart.data" [type]="lineAreaChart.type" [options]="lineAreaChart.options"
                                        [responsiveOptions]="lineAreaChart.responsiveOptions" [events]="lineAreaChart.events">

                                    </x-chartist> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


@endsection
