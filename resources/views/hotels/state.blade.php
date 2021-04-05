<!doctype html>
<html>
<head>
    <title>Nigerian Hotel at a glance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/hotel2.css">
    {{--{{Html::style('assets/css/bootstrap.css')}}--}}
    {{--{{Html::style('assets/css/hotel2.css')}}--}}
</head>
<body>
<div>
    <nav style="padding-top: 0;padding-bottom: 0" class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="/hotels" style="cursor: pointer;
            font-size: x-large;
            border: 2px dashed #9b9bd4;
            border-radius: 15px;">NHG</a>
        </div>
        <div class="nav nav-justified">
            <div class="nav-item">
                <a href="#">
                    <img class="nav-link" src="../../../assets/img/skype2.png" alt="skype"  width="65" height="51">
                </a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" role="button">
                    <img class="nav-link dropbtn" src="../../../assets/img/contact.png" alt="contact"  width="65" height="51">
                </a>
                <div class="dropdown-content">
                    <a href="#">+2348140131453</a>
                    {{-- <a href="#">+2348165790268</a> --}}
                </div>
            </div>
            <div class="nav-item dropdown" style="margin-right: 10px">
                <a href="#" role="button">
                    <img class="nav-link dropbtn" src="../../../assets/img/naira.jpeg" alt="exchange"  width="65" height="51">
                </a>
                <div class="dropdown-content">
                    <a href="#" class="active">Nigerian Naira</a>
                    <a href="#">European Euro</a>
                    <a href="#">US Dollar</a>
                    <a href="#">British Pounds</a>
                </div>
            </div>
            <div class="nav-btn">
                <button class="btn btn-outline-primary" style="margin-right: 10px">
                    <a href="{{url('hotels/sign_up')}}">Sign up</a>
                </button>
            </div>
            <div class="nav-btn">
                <button  class="btn btn-outline-primary"><a href="{{url('hotels/log_in')}}">Log in</a></button>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="container mt-5" style="border-top: 1px solid #e3e3e3;">
            <h3 class="sub-heading text-center" style="color: #084482;font-size: 24px;font-weight: 400; ">
                {{'Hotels in '. $state}}
            </h3>
            <div class="top-deals">
                <div class="deals row mb-5" role="listbox">
                    <div class="deal1 col-md-4 col-x1-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal1.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Hatifield Apartments</h6></a></li>
                                <li><a href="#"><p>Jari, Abuja</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="deal2 col-md-4 col-sm-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal2.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Pelican Internatinale Hotel</h6></a></li>
                                <li><a href="#"><p>Lekki, Lagos</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="deal3 col-sm-4 col-x1-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal3.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Lagoon Crest Hotel</h6></a></li>
                                <li><a href="#"><p>Lekki, Lagos</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="deals row mb-5" role="listbox">
                    <div class="deal1 col-md-4 col-x1-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal1.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Hatifield Apartments</h6></a></li>
                                <li><a href="#"><p>Jari, Abuja</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="deal2 col-md-4 col-sm-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal2.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Pelican Internatinale Hotel</h6></a></li>
                                <li><a href="#"><p>Lekki, Lagos</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="deal3 col-sm-4 col-x1-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal3.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Lagoon Crest Hotel</h6></a></li>
                                <li><a href="#"><p>Lekki, Lagos</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="deals row mb-5" role="listbox">
                    <div class="deal1 col-md-4 col-x1-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal1.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Hatifield Apartments</h6></a></li>
                                <li><a href="#"><p>Jari, Abuja</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="deal2 col-md-4 col-sm-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal2.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Pelican Internatinale Hotel</h6></a></li>
                                <li><a href="#"><p>Lekki, Lagos</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="deal3 col-sm-4 col-x1-12" role="option" style="width:310px">
                        <div class="deal-image">
                            <img src="../../../assets/img/deal3.png" alt="first deal" width="300" height="178">
                        </div>
                        <div class="deal-caption">
                            <ul style="list-style: none">
                                <li><a href="#"><h6>Lagoon Crest Hotel</h6></a></li>
                                <li><a href="#"><p>Lekki, Lagos</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container sub-main1 text-center">
                <h3 style="color: #084482;font-size: 24px;font-weight: 400;">
                    10,222 hotels in 1,787 cities in Nigeria
                </h3>
                <p>
                    <a href="/hotels/state/abia">Abia (225)</a>
                    <a href="/hotels/state/Abuja">Abuja (823)</a>
                    <a href="/hotels/state/Adamawa">Adamawa (45)</a>
                    <a href="/hotels/state/Akwa_Ibom">Akwa Ibom (417)</a>
                    <a href="/hotels/state/Anambra">Anambra (242)</a>
                    <a href="/hotels/state/Bauchi">Bauchi (41)</a>
                    <a href="/hotels/state/Bayelsa">Bayelsa (171)</a>
                    <a href="/hotels/state/Benue">Benue (280)</a>
                    <a href="/hotels/state/Borno">Borno (19)</a>
                    <a href="/hotels/state/Cross_River">Cross River (346)</a>
                    <a href="/hotels/state/Delta">Delta (542)</a>
                    <a href="/hotels/state/Ebonyi">Ebonyi (72)</a>
                    <a href="/hotels/state/Edo">Edo (287)</a>
                    <a href="/hotels/state/Ekiti">Ekiti (214)</a>
                    <a href="/hotels/state/Enugu">Enugu (279)</a>
                    <a href="/hotels/state/Gombe">Gombe (32)</a>
                    <a href="/hotels/state/Imo">Imo (243)</a>
                    <a href="/hotels/state/Jigawa">Jigawa (29)</a>
                    <a href="/hotels/state/Kaduna">Kaduna (258)</a>
                    <a href="/hotels/state/Kano">Kano (107)</a>
                    <a href="/hotels/state/Katsina">Katsina (24)</a>
                    <a href="/hotels/state/Kebbi">Kebbi (24)</a>
                    <a href="/hotels/state/Kogi">Kogi (228)</a>
                    <a href="/hotels/state/Kwara">Kwara (295)</a>
                    <a href="/hotels/state/Lagos">Lagos (2303)</a>
                    <a href="/hotels/state/Nasarawa">Nasarawa (205)</a>
                    <a href="/hotels/state/Niger">Niger (93)</a>
                    <a href="/hotels/state/Ogun">Ogun (602)</a>
                    <a href="/hotels/state/Ondo">Ondo (188)</a>
                    <a href="/hotels/state/Osun">Osun (250)</a>
                    <a href="/hotels/state/Oyo">Oyo (519)</a>
                    <a href="/hotels/state/Plateau">Plateau (266)</a>
                    <a href="/hotels/state/Rivers">Rivers (422)</a>
                    <a href="/hotels/state/Sokoto">Sokoto (15)</a>
                    <a href="/hotels/state/Taraba">Taraba (85)</a>
                    <a href="/hotels/state/Yobe">Yobe (6)</a>
                    <a href="/hotels/state/Zamfara">Zamfara (22)</a>  
                </p>
            </div>
        </div>

    </div>
    <div class="submain2 text-center">
        <h3 style="color: #084482;font-size: 24px;font-weight: 400;">
            Shhh.... Don't tell anyone
        </h3>
        <p>
            Enter your email address to receive secret hotel deals
        </p>
        <form class="form-inline dform">
            <div class>
                <input class="form-control-sm mail" type="email" name="mail" placeholder="Enter your e-mail address">
            </div>
            <div class="form-group">
                <button class="btn btn-primary lbutton">Subscribe</button>
            </div>
        </form>
    </div>
</div>


<script src="../../../assets/js/jquery-3.3.1.min.js"></script>
<script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>