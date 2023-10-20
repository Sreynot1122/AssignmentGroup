<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
public function home(){
    $data ['title']= "Welcome to Good Health";
    return view('front_home', $data);
}

public function about(){
    $data ['title']= "About Us";
    return view('front_about',$data);
}

public function service(){
    $data ['title']="Service";
    return view('front_service',$data);
}

public function appointment(){
    $data ['title']="Appointment";
    return view('front_appointment',$data);
}

public function doctors(){
    $data ['title']="Doctors";
    return view('front_doctors',$data);
}

public function feature(){
    $data ["title"]="Feature";
    return view('front_feature',$data);
}

public function footer(){
    $data ['title']="Footer";
    return view('front_footer',$data);
}

public function out_doctors(){
    $data ['title']="Out Doctor";
    return view('front_out_doctors',$data);
}

public function testimonial(){
    $data ['title']="Testimonial";
    return view('front_testimonial',$data);
}
public function page(){
    $data ['title']="404Page";
    return view('front_page',$data);
}


public function contact(){
    $data ['title']="Contact";
    return view('front_contact',$data);
}
}
