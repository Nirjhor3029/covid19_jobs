@extends('layouts.master')
@section('title',"Add Seeker")
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
                                 <!--start data table -->
                                    <div class="m-tableContainer">
                                        <table>
                                            <thead class="mt-header">
                                                <tr bgcolor="#7fffd4">
                                                    <td>Worker Name</td>
                                                    <td>Area</td>
                                                    <td>NID</td>
                                                    <td>Phone Number</td>
                                                    <td>Per Day Income</td>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            </tbody>
                                        </table>


                                    </div>

                                    <div class="m-button-container">

                                        <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                                <button class="btn mbtn-index" style="padding: 6px;font-size: 14px"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Choose Excel File</button>
                                            </div>

                                            <div class="col-md-3 offset-md-3 col-sm-3 offset-md-1">
                                                <button class="btn mbtn-index" style="padding: 6px;font-size: 14px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </div>

                                            <div class="col-md-3 col-sm-4" >
                                                <button class="btn mbtn-index" style="padding: 6px;font-size: 14px"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save and Upload Seeker</button>
                                            </div>

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

