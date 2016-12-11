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
        <p class="paraTitle">Please select an option from below for help.</p></center>

<div class="questionBox">
         <h4>
              {{$question->question}}
         </h4>
         <h6>
              {{$question->suggestion}}
         </h6>
</div><p>

<form action="url" method="get">
  <button class="button" formaction={{url($leftChildURL)}}>Yes</button>
  <button class="button" formaction={{url($rightChildURL)}}>No</button>
  <button class="button" formaction={{url('support')}}>Question Still Not Answered?</button>
</form>
</center>





<div id="footer">

    <p class="footerText">Website Design &copy; Ashley Duggan</p>
    </div>

</body>
</html>