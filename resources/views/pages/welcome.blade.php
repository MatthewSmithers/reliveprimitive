@extends('app')

@section('content')
<div class="container" style="margin-top:45px;">
      <header>
        <div class="row">
          <div class="large-12 column">
            <img src="../img/trappingRPAdirondacks.jpg">
          </div>
        </div>
      </header>
    <br>
      <div class="row">
        <div class="medium-3 large-3 text-center columns">
          <img src="../img/survival-classes.png">
            <h4>Survival Classes</h4>
            <p>Get excellent hands-on survival training taught from a Christian perspective. No faux native, new-age hogwash. </p>
        </div>
        <div class="medium-3 large-3 text-center column">
          <img src="../img/horse-archer.png">
            <h4>Primitive Events</h4>
            <p>Horse archery competitions, bow making workshops, homesteading clinics, are just a few of many annual events.</p>
        </div>
        <div class="medium-3 large-3 text-center column">
          <img src="../img/interactive-media.png">
            <h4>Interactive Media</h4>
            <p>Get access to wilderness survival related multimedia, including member forum, ebooks, videos, and tutorials.</p>
        </div>
        <div class="medium-3 large-3 text-center column">
          <img src="../img/moral-compass.png">
            <h4>Character Building</h4>
            <p>Christian fellowship and discipleship are motives behind everything we do. Godly character is fostered.</p>
        </div>
      </div>

     <!--  <div class="row" style="margin-top:10px;">
        <div class="large-12 columns">
          
        </div>
      </div> -->

      <ul class="example-orbit-content" data-orbit>
        <li data-orbit-slide="headline-1">
          <div class="text-center panel">
            <h2 style="text-align:center;">What people are saying:</h2>
            <quote><h4>"In the Rangers, they gave us survival training but our goal was to make it back to society. You are teaching people how to stay out forever!"</h4></quote>
            <h5>-US Army Ranger</h5>
          </div>
        </li>
        <li data-orbit-slide="headline-1">
          <div class="text-center panel">
            <quote><h4>"We have lived in Israel for many years now and have never found anything like Relive Primitive... Our boys will never forget your classes."</h4></quote>
            <h5>-Angela Hersch, Israeli Missionary</h5>
          </div>
        </li>
        <li data-orbit-slide="headline-1">
          <div class="text-center panel">
            <quote><h4>"Lorem iblockquotesum dolor sit amet, consectetur adiblockquoteisicing elit. Eos animi, nobis illo. Reblockquoteellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!"</h4></quote>
            <h5>-Anonymous US Army Ranger</h5>
          </div>
        </li>
      </ul>

      <div class="row makeroom">
        <hr class="style-seven">
      </div>

      <div class="row" >
        <div class="large-12 columns">
          <h2>What We Teach</h2>
        </div>
      </div>
      <div class="row">
        <div class="medium-4 large-4 columns">
          <h3>Native Material Culture</h3>
          <p>We'll teach you the skills to live as our primitive ancestors. You'll hunt, fish, and trap like a native. We teach the total material culture of indigenous peoples.</p>
          <h3>Trapping Instruction</h3>
          <p>The most effective way to gain food, clothing, tools and materials in the natural world is through the fine art of trapping. You'll shed years off of the learning curve!</p>
          <h3>24/7 Survival</h3>
          <p>We cover survival skills you need day or night, including tracking in the dark, learning the constellations,  as well as ethnobotanical knowledge for night time.</p>
        </div>
        <div class="medium-4 large-4 columns">
          <h3>Arts <span class="amp">&amp;</span> Craftsmanship</h3>
          <p>From bow making to canoe building, we'll help you master the techniques of many lost arts. You'll gain craftsmanship in areas requiring specialized skills &amp; knowledge.</p>
          <h3>Ethnobotany</h3>
          <p>You will never see weeds again. You will know plants by name and gain an indepth knowledge of edible, medicinal, and material uses for our native plant species.</p>
          <h3>Traditional Living</h3>
          <p>You can't go back to the old days, but you can live the way your forefathers did. We'll teach homesteading skills that will help you live off the grid.</p>
        </div>
        <div class="medium-4 large-4 columns text-center">
           <!-- <img src="http://placehold.it/300x500&text=[things]"> -->
           <img src="../img/JoeMeckTrapper.jpg">
        </div>
      </div>

    <div class="row makeroom">
      <hr class="style-seven">
    </div>

      <div class="row">
        <div class="large-12 columns">
          <h2>Classes For All Seasons</h2>
          <h3>We teach survival in year round, to take advantage of seasonal flora &amp; fauna.</h3>
        </div>
      </div>
      <div class="row">
        <div class="medium-4 large-4 columns text-center">
          <img src="../img/syracuseClass.jpg">
          <p class="text-left">New students enroll in Wilderness 101. It covers fundamentals of survival and introduces skills you should master including shelter building, friction fires, tracking, crafting weapons, and hunting, fishing, trapping, &amp; more. This course is a prerequisite to all advanced courses.</p>
        </div>
        <div class="medium-4 large-4 columns text-center">
          <img src="../img/furtrapperswithbundles.jpg">
          <p class="text-left">Fall Advanced Skills &amp; Spring Advanced Skills focus on survival using what is available in those seasons. Fall classes focus on hunting, trapping, and the preparations for Winter. Spring courses focus on survival skills using the Spring-time flora &amp; fauna.
          </p>
        </div>
        <div class="medium-4 large-4 columns text-center">
          <img src="../img/TrapperByRockwellKent.jpg">
          <p class="text-left">For the truly dedicated, we have Winter Survival. We cover snow shelters and tracking, as well as Winter crafts suited to the season, We also cover hunting and trapping methods for the frozen world. You'll learn how to keep warm, well fed, and prosperous in Winter.</p>
        </div>
      </div>

</div>     
    
@endsection

