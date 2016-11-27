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

<center><img src="{{URL::asset('images/settings_hands.png')}}" style="width: 200px; height: 200px; margin-top: 10px; margin-bottom: -5px"></center>
<div class="sectionBox">
          <p class="sectionTitle">Our Purpose</p>
          <p class="paraFont">We would like to design and create a mobile phone application that helps users with IT problems. The application would use a “twenty questions” based system that would allow the user to narrow down their problem based on diagnosis questions asked by the application. <p class="paraFont">
          The application would have use AVL tree’s to store the questions and answers to the IT problems. Problems and solutions would be able to be added by users. The tree would be able to balance itself so that the root question is always an equivalent distance to each  solution.<p class="paraFont">
          The idea is that this would be a crowd based system that would allow users to answer questions and thus entering more nodes into the tree allowing it to grow. Our application of this system is for IT questions, since that is what we have experience in, but this sort of system could be applied to any situation that needs diagnosing, for example, automotive diagnosis, plant or animal identification, or illness diagnosis. 
</div>


<div class="sectionBox">
          <img src="{{URL::asset('images/person.png')}}" style="width: 100px; height: 100px; margin-top: 10px; margin-left: -15px;">
          <p class="sectionTitle">Who We are</p>
          <p class="paraFont">We are a group of students fromt he University of Maine. We contain two computer science majors and two new media majors. We all have a love for computers and truly appreciate the power you hold to create with them.   
        
</div>

 <img src="{{URL::asset('images/justin.png')}}" style="float: left">
  <img src="{{URL::asset('images/eric.png')}}" style="float: left">
    <img src="{{URL::asset('images/connor.png')}}" style="float: left">
      <img src="{{URL::asset('images/ashley.png')}}" style="float: left; margin-bottom: 10px;">
<p>


<div></div>
<div id="footer">

    <p>Website &copy; Ashley Duggan Designs</p>
    </div>

</body>
</html>