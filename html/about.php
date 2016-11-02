<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php'); ?>
    <title>About &gt; AUCS</title>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">AUCS <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/about">About</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/contact_us">Contact us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="main container">
      <div class="row">
        <div class="col-md-8">
          <h1><span class="glyphicon glyphicon-chevron-right"></span> About AUCS</h1>
          <p>We are Aberdeen University Computing Society, a departmental society at the University of Aberdeen. We take care of Room 205 (Meston) and use it as the venue for our weekly meet-ups. (Although we sometimes venture out to external events.)</p>
          <p><blockquote>"A friendly place to meet people, have fun and learn new skills."</blockquote></p>
          <p>That's our society in a nutshell. More specifically, we deal with <strong>non-mainstream operating systems and software</strong>, <strong>current issues in computing</strong>, <strong>challenges of computing science</strong>, <strong>digital privacy and rights</strong>, and anything else you can't get in lectures. We keep our areas of interest broad so that members shape the types of events we hold.</p>
          <h2>Organisational structure</h2>
          <p>We are a departmental society affiliated with Aberdeen University Students' Association. Our societal committee members are elected each year at the Annual General Meeting and can be <a href="/contact_us">contacted here</a>. Committee members are the first point of contact for the society &mdash; get in touch if you have any questions, ideas, or suggestions.</p>
          <h2>Objectives</h2>
          <p>Our primary mission is to increase collaboration between students, academics and the industry in both computing science and related fields. As part of our mission to strengthen links within the computing and tech communities in Aberdeen, we often attend or host events in partnership with other local groups. Head over to our <a href="/events">events page</a> now for details about upcoming events.</p>
          <h2>History</h2>
          <p>AUCS was founded in 2011 by computing science students who felt there was no central place where students in computing science could come together, socialise and collaborate; it's also a place where students can explore aspects of computing not explicitly included in their studies. Eloquently put by the society's founding members:</p>
          <p><blockquote>"We like to learn about computer things, do computer things, and watch others do computer things."</blockquote></p>
        </div>
        <div class="module-column col-md-4">
          <?php include('module_next_event.php') ?>
          <?php include('module_twitter.php'); ?>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
