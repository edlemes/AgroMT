<?php
include 'Model/inicio-html.php';
include 'Model/head.php';
?><body>
  <div class="preloader"> <img src="images/preloader.gif" alt="Image"> </div>
  <!-- end preloader -->
  <div class="page-transition"></div>
  <!-- end page-transition -->
  <div class="search-box">
    <div class="inner">
      <form>
        <input type="search" placeholder="Type here to search">
        <input type="submit" value="SEARCH">
      </form>
    </div>
  </div>
  <!-- end search-box -->
  <!-- HEADER -->
  <?php require_once 'Model/header.php'; ?> <!--Faz a inclusão da Navbar -->
  <!-- HEADER -->
  <section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-left">
            <h2>OUR MISSION SINCE 1985.</h2>
            <div class="row inner">
              <div class="col-md-6">
                <p>Farm Aid’s mission is to keep family farmers on the land. We’re
                  best known for our annual music, food and farm festival, but the
                  truth is we work each and every day, year-round to build a
                  system of agriculture that values family farmers, good food, soil
                  and water, and strong communities.</p>
              </div>
              <!-- end col-6 -->
              <div class="col-md-6">
                <p>Learn more about our day-to-day work to celebrate and strengthen
                  farmers, advocate for fair farm policies, connect farmers and
                  eaters, and bring family farm food to everyone.</p>
              </div>
              <!-- end col-6 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-12">
          <div class="side-image-box">
            <figure><img src="images/side-image-box01.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Supporting Family Farmers</h3>
              <p>Our 1-800-FARM-AID hotline and Farmer Resource Network
                provides immediate and effective support services to farm
                families in crisis. We help farmers find the resources they need
                to access new markets, transition to morer.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
          <div class="side-image-box">
            <figure><img src="images/side-image-box02.jpg" alt="Image"></figure>
            <div class="content">
              <h3>The building movement</h3>
              <p>Each year, proceeds from Farm Aid’s annual concert and
                our generous community of donors are granted to nonprofit
                organizations working to strengthen family farm
                agriculture in the United States.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
          <div class="side-image-box">
            <figure><img src="images/side-image-box03.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Promoting farm foods</h3>
              <p>Farm Aid fosters connections between farmers and
                eaters by growing and strengthening local and regional
                markets and working to get family farm food in urban
                neighborhoods, grocery stores, restaurants.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
          <div class="side-image-box">
            <figure><img src="images/side-image-box04.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Celebrating family farmers</h3>
              <p>Each year, proceeds from Farm Aid’s annual concert and
                our generous community of donors are granted to nonprofit
                organizations working to strengthen family farm
                agriculture in the United States.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
        </div>
        <!-- end col-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <?php include 'Model/footer.php'; ?> <!--End Footer -->
  <?php include 'Model/scripts.php'; ?> <!-- JS FILES -->
  <?php include 'Model/fim-html.php'; ?> <!-- Fim HTML -->