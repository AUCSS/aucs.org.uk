<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php'); ?>
    <title>Contact us &gt; AUCS</title>
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
            <li><a href="/events">Events</a></li>
            <li class="active"><a href="/contact_us">Contact us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="main container">
      <div class="row">
        <div class="col-md-8">
          <h1><span class="glyphicon glyphicon-chevron-right"></span> Contact us  <small>committee, mailing lists, and chat</small></h1>
          <p>It's really easy to keep in touch. We have a new domain, so bookmark <strong>aucs.org.uk</strong>. If the kittens have divided our server by zero again, or you're feeling particularly social, then tweet to us <a href="https://twitter.com/AUCompSoc">@AuCompSoc</a> or hit the buttons below to get in on the discussion between members and influence future events. Alternatively, feel free to send off an email to one of our committee members.</p>
          <a href="https://mlisthost.abdn.ac.uk/mailman/listinfo/aucss-discuss"><button type="button" class="btn btn-lg btn-default">Mailing List (email)<br>mlisthost.abdn.ac.uk</small></button></a>
          <a href="https://www.facebook.com/groups/aucssoc/"><button type="button" class="btn btn-lg btn-default">Facebook Group<br><small>facebook.com/groups/aucssoc/</small></button></a>
          <a href="https://twitter.com/AUCompSoc"><button type="button" class="btn btn-lg btn-default">Twitter<br><small>twitter.com/AUCompSoc</small></button></a>
          <h2>Committee</h2>
          <p>Committee members are the first point of contact for the society (aside from, you know, just turning up to one of our events and having a chat) and are students elected each year at our Annual General Meeting. You can get in touch using the details below.
          <h3>President <small>Responsible for the overall smooth running and organisation of the society.</small></h3>
          <p>Keeyan Nejad <!-- &mdash; <a href="president@aucs.org.uk">president@aucs.org.uk</a> --> </p>
          <h3>Secretary <small>Takes care of administrative functions, such as mailing out important stuff to members, and helps to organise the society.</small></h3>
          <p>Simon de Lecq Marguerie <!--  &mdash; <a href="treasurer@aucs.org.uk">treasurer@aucs.org.uk</a> --> </p>
          <h3>Treasurer <small>Looks after the society's accounts, orders our famous hoodies, and counts the pennies in our donations tin daily.</small></h3>
          <p>Kevin Mulhern <!-- &mdash; <a href="secretary@aucs.org.uk">secretary@aucs.org.uk</a> --> </p>
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
