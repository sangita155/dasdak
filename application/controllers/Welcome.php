<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
 {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$this->load->library('email');
		$this->email->set_newline('\r\n');
  
    $this->email->from('sang.kri.cs155@gmail.com','sangita');
   $this->email->to("niraj.k36@gmail.com");
    $this->email->subject("Redskins Training Camp Pass");
    $message = '<html><body>';
$message .= '';
$message .= '<table rules="all" width="600px" style="border-color: #666;" cellpadding="10">';
$message .= '<center>
    <div style="width:650px">
        <div style="width:100%"><img src="https://ci5.googleusercontent.com/proxy/09IF-EJzb7aYq1DlpM-Bg5hGbAhm2TtFnsD9GRmeLyZ1utDm7GYO4qGrp2kMSLNnY4mKy-526k31kK4DPlm-4QYumPpt3rA=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/images/hero.jpg" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 752px; top: 231px;"><div id=":1sa" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download"><div class="aSK J-J5-Ji aYr"></div></div></div></div>
        <h3 style="margin:10px 0px 15px 0px;color:#7a1526;font-family:sans-serif">SANGITA KUMARI</h3>
        <div style="margin-bottom:15px;text-align:center;width:100%">
            <img src="https://ci4.googleusercontent.com/proxy/kY2MPCG9yEs_WD64_tOvENKuYXxtaU8hWa0EMX5GhzhX1y61vQ42nK87zukJB1uraQSqxkCeInrzcjqznWfXLRjZFteh2p9N=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/images/promo.gif" style="height:160px;margin-right:15px" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 407.688px; top: 443px;"><div id=":1sb" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download"><div class="aSK J-J5-Ji aYr"></div></div></div>
            <img src="https://ci6.googleusercontent.com/proxy/iln64Xs-rPynqFjvrHAromnoBuTcXSk1JsWhiLUnWsk3tijPLIT19ks3P0yksi2E3y60jOEilWwc3yZp8TituQd-l1yZqBsmWXU=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/barcode/1599211195" height="160px" class="CToWUd">
        </div>
                    <h3 style="color:#7a1526;font-family:sans-serif;border-bottom:1px solid #7a1526;padding:0px;width:66%;margin:15px 0px 15px 0px">GUEST BARCODES</h3>
            <div style="text-align:center;width:100%;padding-bottom:15px">
                                    <img style="margin:9px" src="https://ci5.googleusercontent.com/proxy/y78YUZ9AByLz-yfCxB2IP-ua5_C0PRKiRz-DBM4jtcrZCqQ9apZ3UvI2wk224t6wnSsKZethMuUVqNLe9b-4DKsLwS1k7H2breJI=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/barcode/15992111951" height="160px" class="CToWUd">
                                    <img style="margin:9px" src="https://ci3.googleusercontent.com/proxy/U-3r201d6HGZLnaNNBJpiEggwBwcgEWKUkHqW-vbuM0TleYW5xt0bxG2A8Gf-GtRkykfsfD6fMTpu4eC2o0StO0ZGYirLRI5RcMj=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/barcode/15992111952" height="160px" class="CToWUd">
                                    <img style="margin:9px" src="https://ci5.googleusercontent.com/proxy/QG06BfJPsbhCrqUmnmf8DYjSEk1ZC7G7swm2PEPD_ydixpoVpNUG4055FzQ8PvV9CQdcRpa8ctzgMcEh0AB-EibXI17Oz8AkqeAB=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/barcode/15992111953" height="160px" class="CToWUd">
                                    <img style="margin:9px" src="https://ci5.googleusercontent.com/proxy/9Pz_yd7gp-SyAQRw19qxCHVSYTh2uYJRj9_TuzA8dE-REM4fSPBzg-ls3svHtJ3LjrotL_5Se0ODsNbdGF6q0KQ_pRxQL2RN0JDX=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/barcode/15992111954" height="160px" class="CToWUd">
                            </div>
                <div style="border-bottom:1px solid #731616;width:66%;margin-bottom:10px"></div>
        <div>
            <img src="https://ci3.googleusercontent.com/proxy/2zpNp3FIHptvH13xnEh43nH2uFV-Hv-z1NbmjpUvYlSZcmKW0LOwLAtW-iZZs7YT6AvKe4ZgA2fcJrZdryn6WEc5w88p9g45GNOBqss=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/images/disclaimer.jpg" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 752px; top: 1070px;"><div id=":1sc" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Download" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V"><div class="aSK J-J5-Ji aYr"></div></div></div>
        </div>
        <div>
            <img src="https://ci5.googleusercontent.com/proxy/5pghzL2wTSnaCoSz5RHvU6D4z0ow18sEGOEVx1zVpqKn3ajotV-SR6ApH-T78DpvluW-Dm-_tQpgX63VU2_65f2lxdEpQw=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/images/app.jpg" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 752px; top: 1277px;"><div id=":1sd" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Download" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V"><div class="aSK J-J5-Ji aYr"></div></div></div>
        </div>
        <div>
            <img src="https://ci5.googleusercontent.com/proxy/WLps3HJPlMNNnITtMmsjVV3v6BScrA2VIr0W7ROWZmiOPidrj53R7e2OA5-Ye7Rwr17oVHXcz_bzVfMowtlKFE4Gjhrs6ByivesJ=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/images/roadtrip.jpg" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 752px; top: 1482px;"><div id=":1se" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Download" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V"><div class="aSK J-J5-Ji aYr"></div></div></div>
        </div>
        <div>
            <img src="https://ci4.googleusercontent.com/proxy/uUGdIDhSBq6MiYDgvc6x2ubkjyiLuS0b8OH7VPg8IuzT0yY5AkmCCF2py56rk2MxRf-g3GiWBqbID5iDYwnQbNoSmx-KVlwl=s0-d-e1-ft#http://redskinsvalidation.dasdak.com/images/promo.jpg" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 752px; top: 1688px;"><div id=":1sf" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Download" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V"><div class="aSK J-J5-Ji aYr"></div></div></div>
        </div>
    </div>
</center>';

$message .= "</body></html>";

    $this->email->message($message);
   $this->email->set_newline("\r\n");
   $this->email->send();
  echo 'true';

	}

	

			

		
		
}
	


?>
