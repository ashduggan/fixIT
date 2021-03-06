<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{URL::asset('css/stylesheet.css')}}">
</head>
<body>

<ul class="topnav" id="myTopnav">
  <li><a class="active" href="{{url('/')}}">HOME</a></li>
  <li><a href="{{url('about')}}">ABOUT</a></li>
  <li><a href="{{url('support')}}">SUPPORT</a></li>
  <li><a href="{{url('submit')}}">SUBMIT PROBLEM</a></li>
</ul>

<div id="header">
  <a href="{{url('/')}}" class="logo"><img src="{{URL::asset('images/fitItLogoText.png')}}" style="max-width:60%; height:auto;"></a><p>
  
</div>

<center><p class="headingfont">How Can We Help You?</p>
        <p class="paraTitle">Diagnose your problem or choose a popular question below.</p></center>


<a href="{{url('questions/1')}}"> 
  <div class="box">
    Diagnose your problem
  </div>
</a>

@for($i = 0; $i < count($questions); $i++)
  <a href="{{url($questionURLs[$i])}}">
    <div class="box">
      {{$questions[$i]->question}}
    </div>
  </a>
@endfor


<div id="footer">

    <p class="footerText">Website Design &copy; Ashley Duggan</p>
    </div>

</body>
</html>