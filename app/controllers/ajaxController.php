<?php 

 class ajaxController extends Controller
 {
    function __construct(){

    }
    function index(){

        json_output(json_build(403));
    }


 }