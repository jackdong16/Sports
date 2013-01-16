
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Watch sports highlights</h1>
        <p>That is all.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>NBA</h2>
          <p><?php echo $this->Html->image("http://upload.wikimedia.org/wikipedia/en/thumb/0/07/NBALogo.svg/200px-NBALogo.svg.png", array("alt" => "NBA Highlights", 'url' => array('controller' => 'videos', 'action' => 'nba', 1))); ?></p>
        </div>
        <div class="span4">
          <h2>NFL</h2>
          <p><img src="http://www.sfexaminer.com/files/blog_images/NFL_logo.jpg"></p>
       </div>
        <div class="span4">
          <h2>NHL</h2>
          <p><img src="https://twimg0-a.akamaihd.net/profile_images/2479480809/mz1rwdt3gafsda7vc3bc.png"></p>
        </div>
      </div>

      <hr>