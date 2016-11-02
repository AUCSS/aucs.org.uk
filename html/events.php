<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php'); ?>
    <title>Events &gt; AUCS</title>
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
            <li><a href="/about">About</a></li>
            <li class="active"><a href="/events">Events</a></li>
            <li><a href="/contact_us">Contact us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="main container">
      <div class="row">
        <div class="col-md-8">
          <h1><span class="glyphicon glyphicon-chevron-right"></span> Events</h1>
          <p>We meet every week on Wednesday at 6pm in Room 205, Meston &mdash; anyone who is a member of the Students' Association is welcome to join us, and membership is free! Our weekly meeting could include a talk, discussion, code jam, social, gaming night, trip out to an external event, tutorial or workshop. If you have a great idea for an event then <a href="/contact_us">get in touch with the committee</a> and we'll try to make it happen!</p>
          <h2>Calendar</h2>
          <p>Specific event details can change from when they're first listed, so keep checking back here or sign yourself up to our mailing list <a href="https://mlisthost.abdn.ac.uk/mailman/listinfo/aucss-discuss">over here</a>.</p>
          <br>
<!-- ######### EVENT - BEGIN #########
            <div class="panel panel-event">
            <div class="panel-heading">
                  <h3 class="panel-title"><span class="glyphicon glyphicon-calendar"></span> <strong>6PM, Wednesday 5<sup>th</sup> OCT 2016</strong></h3>
                </div>
                <div class="panel-body">
                  <h2>Start our Projects.</h2>
                  <p>Come and get involved with our projects, if you have missed the seesion on git we will be at hand to help with any questions, head over to <a href="https://github.com/AUCSS">Github/AUCSS</a> sign up to get started.</p>
<dl>
<dt>AUCS-OS</dt>
<dd>Build an Operating system</dd>

<dt>Build a Robot</dt>
<dd>Build a robot with the RoboGals</dd>

<dt>aucs.org.uk</dt>
<dd>Redesign our website</dd>

<dt>Raspberry Pi Cluster</dt>
<dd>We have access to a lot of Pi's, lets see what we can do with them.</dd>

<dt>Neural Network</dt>
<dd>Build an Neural Network and bring on the singularity.</dd>
</dl>
                </div>
              <div class="panel-footer panel-footer-event">
                <p><span class="glyphicon glyphicon-user"></span> FREE, attendance open to any student</p>
                <p><span class="glyphicon glyphicon-flag"></span> Meston 205, Meston Building, University of Aberdeen</p>
              </div>
            </div>
######### EVENT - END ######### -->


<!-- ######### EVENT - BEGIN ######### -->
            <div class="panel panel-event">
                <div class="panel-heading">
                  <h3 class="panel-title"><span class="glyphicon glyphicon-calendar"></span> <strong>5PM, Thursday 6<sup>th</sup> OCT 2016</strong></h3>
                </div>
                <div class="panel-body">
                  <h2>Operational Security & Password Cracking Workshop</h2>
                  <p>As Part of 'Cyber' Securtiy Month with IT services we wil be doing an overview talk on operational security, followed by a workshop to see if you can crack your own passwords to find how secure they are.</p><p>Find more information <a href="http://www.abdn.ac.uk/it/student/help/it-security">Student IT-Security</a> and <a href="http://cluedup.abdn.ac.uk">Clued up</a></p>
                </div>
              <div class="panel-footer panel-footer-event">
                <p><span class="glyphicon glyphicon-user"></span> FREE, attendance open to any student</p>
                <p><span class="glyphicon glyphicon-flag"></span> NK11, New Kings, University of Aberdeen</p>
              </div>
            </div>
<!-- ######### EVENT - END ######### -->
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
