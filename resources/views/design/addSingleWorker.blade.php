@extends('layouts.master')
@section('title',"Add Single Worker")
@section('content')

    {{--start container--}}
    <section class="container">
        <div class="mindex-wapper">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-sm-12">

                    {{--stat table for add single worker page--}}

                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs mnav-tabs">
                            <li class="nav-item">
                                <a class="nav-link tabButton active" data-toggle="tab" href="#home">Seeker Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tabButton" data-toggle="tab" href="#menu1">Offered Job</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tabButton" data-toggle="tab" href="#menu2">Avliable Job</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content mtab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <!--start form here-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" class="m-input" name="" placeholder="Worker Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <select name="" class="m-select">
                                            <option>Area of Living</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="m-input" name="" placeholder="NID Number">
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text" class="m-input" name="" placeholder="Per Day Income">
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="m-input" name="" placeholder="Phone Number">
                                    </div>

                                </div>


                                <div class="row" style="margin-top: 20px;margin-bottom: 30px;">
                                    <div class="col-md-3 col-sm-6">
                                        <input type="checkbox" id="Experience" class="m-checkbox"><label for="Experience">  Previous Experience</label>
                                    </div>

                                    <div class="col-md-3 col-sm-6">
                                        <input type="checkbox" id="Travel" class="m-checkbox"><label for="Travel">  Willingness to Travel</label>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-3 col-sm-4 offset-md-6">
                                        <button class="btn mbtn-index" style="padding: 6px;font-size: 14px"><i class="fa fa-plus" aria-hidden="true"></i> Add a Seeker</button>
                                    </div>

                                    <div class="col-md-3 col-sm-4">
                                        <button class="btn mbtn-index" style="padding: 6px;font-size: 14px"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Seeker</button>
                                    </div>

                                </div>



                                <!--end form here-->
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <h3>Menu 1</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                        </div>

                  {{--  end here--}}


                </div>
            </div>
        </div>
    </section>


@endsection

