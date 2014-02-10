<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-th-list"></span>
      </a>
      <a href="index.php" class="brand">RaptorBird</a>
      <div class="nav-collapse collapse">
        <ul class="nav pull-right">
          <li class=" <?php if($here=="index.php") { echo "active"; } ?> "><a href="index.php">Welcome</a></li>
          <li class="divider-vertical"></li>
          <li class=" <?php if($here=="capacitor.php") { echo "active"; } ?> "><a href="capacitor.php">Programmable Capacitor</a></li>
          <li class="divider-vertical"></li>
          <li class=" <?php if($here=="sleeplite-kit.php") { echo "active"; } ?> "><a href="sleeplite-kit.php">SleepLite Kit</a></li>
          <li class="divider-vertical"></li>
          <li class=" <?php if($here=="members.php") { echo "active"; } ?> "><a href="members.php">Members</a></li>
          <li class="divider-vertical"></li>
          <li class=" <?php if($here=="contact.php") { echo "active"; } ?> "><a href="contact.php">Contact Us</a></li>
        </ul>
      </div> <!-- nav-collapse END -->
    </div> <!-- First container END -->
  </div> <!-- navbar-inner END -->
</div> <!-- navbar-fixed-top END -->
