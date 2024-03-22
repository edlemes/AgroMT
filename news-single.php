<?php
include 'Model/inicio-html.php';
include 'Model/head.php';
?>

<body>
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
        <div class="col-lg-8">
          <div class="blog-post">
            <figure><img src="images/blog01.jpg" alt="Image"></figure>
            <div class="post-content">
              <span class="post-date">Dec 26, 2020</span>
              <h3 class="post-title">What About Farming, Food and You</h3>
              <div class="author"> <img src="images/avatar.jpg" alt="Image"> <span>by <strong>Alex
                    Dinamov</strong></span> </div>
              <!-- end author -->
              <p>How much time, money and <u>energy do your brand</u> spend on retaining customers? Very little, right.
                Most businesses divert all their attention to acquiring new customers because they believe that their
                business can thrive by getting more new customers. </p>

              <p>But why smiling man her imagine married. Chiefly can man her out <strong>believe</strong> manners
                cottage colonel unknown. Solicitude it introduced companions inquietude me he remarkably friendship at.
                My almost or horses period. Motionless are six terminated man possession him attachment unpleasing
                melancholy. Sir smile arose one share. No abroad in easily relied an whence lovers temper by. Looked
                wisdom common he an be giving length mr. </p>
              <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held
                late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several
                bed its wishing. Is so <strong>moments</strong> on chamber pressed to. Doubtful yet way properly
                answered humanity its desirous. Minuter believe service arrived civilly add all. Acuteness allowance an
                at eagerness favourite in extensive exquisite ye. </p>
              <blockquote>
                Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering
                honoured.
              </blockquote>
              <p>To sure calm much most long me mean. Able rent long in do we. Uncommonly no it announcing melancholy an
                in. Mirth learn it he given. Secure shy favour length all twenty denote. He felicity no an at packages
                answered opinions juvenile. </p>
              <figure class="full-image"><img src="images/slide03.jpg" alt="Image"></figure>
              <p>Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up
                face show rent oh mr. Required is debating extended wondered as do. New get described applauded
                incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do
                he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting
                everything.</p>
              <h5>New kind of list style</h5>
              <p>Instrument cultivated <u>alteration</u> any favourable expression law far nor. Both new like tore but
                year. An from mean on with when sing pain. Oh to as principles devonshire companions unsatiable an
                delightful. The ourselves suffering the sincerity. Inhabit her manners adapted age certain. Debating
                offended at branched striking be subjects. </p>
              <ul>
                <li>Turned it up should no valley cousin he. </li>
                <li>Speaking numerous ask did horrible packages set. </li>
                <li>Ashamed herself has distant can studied mrs. </li>
                <li>Led therefore its middleton perpetual fulfilled provision frankness. </li>
                <li>Small he drawn after among every three no. </li>
                <li>All having but you edward genius though remark one. </li>
              </ul>
              <p>Ask especially collecting terminated may son expression. Extremely eagerness principle estimable own
                was man. Men received far his <strong>dashwood subjects</strong> new. My sufficient surrounded an
                companions dispatched in on. Connection too unaffected expression led son possession. New smiling
                friends and her another. Leaf she does none love high yet. Snug love will up bore as be. Pursuit man son
                musical general pointed. It surprise informed mr advanced do outweigh. </p>
            </div>
            <!-- end post-content -->
          </div>
          <!-- end blog-post -->
          <ul class="pagination">
            <li class="page-item"> <a class="page-link" href="#">PREV POST</a> </li>
            <li class="page-item"> <a class="page-link" href="#">NEXT POST</a> </li>
          </ul>
          <!-- end pagination -->
        </div>
        <!-- end col-8 -->
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget">
              <h6 class="widget-title">SEARCH</h6>
              <form>
                <input type="search" placeholder="Type here to search">
                <input type="submit" value="Search">
              </form>
            </div>
            <!-- end widget -->
            <div class="widget">
              <h6 class="widget-title">CATEGORIES</h6>
              <ul class="categories">
                <li><a href="#">Farming</a></li>
                <li><a href="#">Organic Food</a></li>
                <li><a href="#">Bored Seeds</a></li>
                <li><a href="#">Farm Equipments</a></li>
                <li><a href="#">Soiel & Lands</a></li>
                <li><a href="#">Plants Veges</a></li>
                <li><a href="#">Organic Markets</a></li>
              </ul>
            </div>
            <!-- end widget -->
            <div class="widget">
              <h6 class="widget-title">GALLERY</h6>
              <ul class="side-gallery">
                <li><a href="images/gallery01.jpg" data-fancybox><img src="images/gallery01.jpg" alt="Image"></a></li>
                <li><a href="images/gallery02.jpg" data-fancybox><img src="images/gallery02.jpg" alt="Image"></a></li>
                <li><a href="images/gallery03.jpg" data-fancybox><img src="images/gallery03.jpg" alt="Image"></a></li>
                <li><a href="images/gallery04.jpg" data-fancybox><img src="images/gallery04.jpg" alt="Image"></a></li>
              </ul>
            </div>
            <!-- end widget -->
          </aside>
          <!-- end sidebar -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <?php include 'Model/footer.php'; ?> <!--End Footer -->
  <?php include 'Model/scripts.php'; ?> <!-- JS FILES -->
  <?php include 'Model/fim-html.php'; ?> <!-- Fim HTML -->