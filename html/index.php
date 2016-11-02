<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php'); ?>
    <title>Home &gt; AUCS</title>
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
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/contact_us">Contact us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="main container">
      <div class="row">
        <div class="col-md-8">
          <div class="jumbotron">
            <h1><span class="glyphicon glyphicon-chevron-right"></span> AUCS</h1>
            <h2>Aberdeen University Computing Society</h2>
            <p class="lead">We are a departmental society at the University of Aberdeen affiliated with the Aberdeen University Students' Association. We hold regular meet-ups where we discuss computer things, do computer things, and watch others do computer things.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.ausa.org.uk/societies/aucss/" role="button">Join the society now <span class="glyphicon glyphicon-chevron-right"></span></a></p>
          </div>
          <div class="module-homepage row">
            <div class="col-md-4">
              <h2>Join us</h2>
              <p>Anyone who is a member of the Students' Association is welcome to join us, and membership is free! Whether you're interested in the big picture, hardware, programming, robotics, or gentle appreciation of cats, there should be something to interest you, broaden your knowledge and sharpen your skills. </p>
              <p><a class="btn btn-lg btn-default" href="/about" role="button">Learn more &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Events</h2>
              <p>We meet every Wednesday during the academic term at 6pm in Meston 205. We could be enjoying a talk, trip out to an external event, discussion, code jam, social, gaming night, tutorial or workshop &mdash; it's up to you, so head over to our events page to see what's happening and join the fun!</p>
              <p><a class="btn btn-lg btn-default" href="/events" role="button">See what's on &raquo;</a></p>
           </div>
            <div class="col-md-4">
              <h2>Services</h2>
              <p>We also provide services to other societies and are always keen to hear ideas for new and interesting collaborations. From small pieces of advice to full management of a website, if you've got an idea then contact us and we'll see if we can work with you to make it happen.</p>
              <p><a class="btn btn-lg btn-default" href="/contact_us" role="button">Contact us &raquo;</a></p>
            </div>
          </div>
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
