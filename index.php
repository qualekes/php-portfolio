<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!--- basic page needs
    ================================================== -->
  <meta charset="utf-8" />
  <title>Qualeke Singleton</title>
  <meta name="description" content="" />
  <meta name="author" content="" />

  <?php
  require 'includes/head.php'
  ?>
</head>

<body id="top" class="home__page">
  <?php
  require 'includes/preloader.php';
  ?>


  <?php
  require 'includes/header.php';

  ?>

  <!-- hero - Homepage
    ================================================== -->
  <section id="hero" class="s-hero target-section" data-parallax="scroll" data-image-src="/" data-natural-width="3000" data-natural-height="2000" data-position-y="center">
    <div class="row hero-content">
      <div class="column large-full">
        <h1>
          Welcome to my portfolio! <br />
          I'm Qualeke Singleton <br />
          A passionate full-stack developer specializing in PHP <br />
        </h1>

        <ul class="hero-social">
          <li>
            <a href="https://github.com/qualekes" title="">GitHub</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/qualeke-singleton/" title="">LinkedIn</a>
          </li>
        </ul>
        <!-- end hero-social -->
      </div>
    </div>
    <!-- end hero-content -->

    <div class="hero-scroll">
      <a href="#about" class="scroll-link smoothscroll">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M12 24l-8-9h6v-15h4v15h6z" />
        </svg>
      </a>
    </div>
    <!-- end hero-scroll -->
  </section>
  <!-- end s-hero -->

  <!-- about
    ================================================== -->
  <section id="about" class="s-about target-section">
    <div class="s-about__section s-about__section--profile">
      <div class="right-vert-line"></div>

      <div class="row">
        <div class="column large-6 medium-8 tab-full">
          <div class="section-intro" data-num="01" data-aos="fade-up">
            <h3 class="subhead">About Me</h3>
            <h1 class="display-1">
              Embracing Challenges: Fueling Growth and Driving Success
            </h1>
          </div>

          <div class="profile-pic" data-aos="fade-up">
            <img src="images/IMG_0431.jpeg" srcset="images/IMG_0431.jpeg 1x, images/IMG_0431.jpeg 2x" alt="" />
          </div>

          <h3 data-aos="fade-up">Profile</h3>

          <p data-aos="fade-up">
            As a web developer and designer with 3 years of experience based in vibrant South Carolina, I wholeheartedly embrace the ever-evolving nature of technology. What truly fuels my passion for this field is the constant opportunity to explore and learn. I am driven by a genuine love for challenges, as they provide the perfect platform for me to push my limits, grow, and excel. With a strong work ethic and unwavering dedication, I approach each project with enthusiasm,eager to create innovative solutions.My commitment to my craft is deeply ingrained, and I am continually striving to achieve new milestones and advancements in my career.
          </p>
        </div>
      </div>
    </div>
    <!-- end s-about__section--profile -->

    <div class="s-about__section">
      <div class="row">
        <div class="column">
          <h3 data-aos="fade-up">Career</h3>
        </div>
      </div>

      <div class="row block-large-1-2 block-900-full work-positions">
        <div class="column" data-aos="fade-up">
          <div class="position">
            <div class="position__header">
              <h6>
                <span class="position__co">National Truck Protection</span>
                <span class="position__pos">Software Developer</span>
              </h6>
              <div class="position__timeframe">March 2022 - Present</div>
            </div>

            <p>
            <ul>
              <li>Implemented software enhancements and optimized existing code to improve application performance & scalability.</li>
              <br>
              <li>Collaborate with cross-functional teams to ensure successful project delivery within specified timelines.</li>
            </ul>
            </p>
          </div>
        </div>
        <!-- end column -->
        <div class="column" data-aos="fade-up">
          <div class="position">
            <div class="position__header">
              <h6>
                <span class="position__co">WintterTech</span>
                <span class="position__pos">PHP Developer</span>
              </h6>
              <div class="position__timeframe">August 2021 - March 2022</div>
            </div>

            <p>
            <ul>
              <li>Created, secured, and managed website using technologies such as Laravel, Javascript, MySql, Photoshop and CSS.</li>

            </ul>
            </p>
          </div>
        </div>
        <!-- end column -->
        <div class="column" data-aos="fade-up">
          <div class="position">
            <div class="position__header">
              <h6>
                <span class="position__co">The Tack Room</span>
                <span class="position__pos">Web Designer/Web Developer</span>
              </h6>
              <div class="position__timeframe">December 2020 - August 2021</div>
            </div>

            <p>
            <ul>
              <li>Created advertisement banners, manipulated and captured photos using Photoshop, HTML, and CSS while using Digital Marketing skills such as SEO and Email Marketing for E-commerce website
              </li>
            </ul>

            </p>
          </div>
        </div>
        <!-- end column -->
        <!-- <div class="column" data-aos="fade-up">
          <div class="position">
            <div class="position__header">
              <h6>
                <span class="position__co">Microsoft</span>
                <span class="position__pos">Product Designer</span>
              </h6>
              <div class="position__timeframe">June 2012 - February 2014</div>
            </div>

            <p>
              Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
              arcu. Curabitur blandit mollis lacus. Curabitur vestibulum
              aliquam leo. Vivamus in erat ut urna cursus vestibulum.
            </p>
          </div>
        </div> -->
        <!-- end column -->
      </div>
      <!-- work positions -->
    </div>
    <!-- end s-about__section -->
  </section>
  <!-- end s-about -->

  <!-- services
    ================================================== -->
  <section id="services" class="s-services target-section h-dark-bg">
    <div class="row s-services__content">
      <div class="vert-line"></div>

      <div class="column large-6 s-services__leftcol">
        <div class="section-intro" data-num="02" data-aos="fade-up">
          <h3 class="subhead">Expertise</h3>

          <h1 class="display-1">
            Expertise in Crafting Modern Web Applications Across Multiple Technologies and Platforms.
          </h1>
        </div>

        <p class="lead" data-aos="fade-up">
          As a web developer with a diverse skill set. I excel in seamless web development, captivating web design, and effective digital marketing strategies. This unique combination of expertise enables me to consistently deliver exceptional results for each project.
        </p>
      </div>
      <!-- end  s-services--leftcol -->


      <div class="column large-6">
        <ul class="services-list" data-aos="fade-up">
          <li class="services-list__item is-active">
            <div class="services-list__item-header">
              <h5>Full-Stack Web Development </h5>
            </div>
            <div class="services-list__item-body">
              <p>
                As a full-stack web developer, my go-to toolkit for creating web applications encompasses a wide range of skills. I am highly proficient in HTML,CSS(including SASS), and JavaScript, which form the foundation for dynamic and interactive user experiences. Additionally, my expertise extends to PHP with a specialization in Laravel, empowering me to build robust and scalable web applications with ease.
              </p>
            </div>
          </li>
          <!-- services-list__item -->
          <li class="services-list__item">
            <div class="services-list__item-header">
              <h5>Web Design</h5>
            </div>
            <div class="services-list__item-body">
              <p>
                When it comes to web design, I rely on tools like Photoshop and Sketch to bring my creative visions to life. These powerful design software enable me to craft visually stunning and user-friendly interfaces for a seamless user experience.
              </p>
            </div>
          </li>
          <!-- services-list__item -->
          <li class="services-list__item">
            <div class="services-list__item-header">
              <h5>Email Marketing/Development</h5>
            </div>
            <div class="services-list__item-body">
              <p>
                In the realm of email marketing and development, I possess a comprehensive skill set. From crafting engaging email campaigns to developing custom templates, I leverage my expertise to deliver impactful and personalized communication strategies that drive conversions and engagement.
              </p>
            </div>
          </li>
          <!-- services-list__item -->
          <li class="services-list__item">
            <div class="services-list__item-header">
              <h5>Digital Marketing</h5>
            </div>
            <div class="services-list__item-body">
              <p>
                In the field of digital marketing, I excel at developing and implementing comprehensive strategies that drive brand awareness, increase website traffic, and generate leads. From search engine optimization(SEO) and social media marketing to content creation and analytics, I leverage a range of tactics to optimize online presence and achieve tangible results.
              </p>
            </div>
          </li>
          <!-- services-list__item -->
          <!-- <li class="services-list__item">
            <div class="services-list__item-header">
              <h5>Visual Design</h5>
            </div>
            <div class="services-list__item-body">
              <p>
                Ut id nisl quis enim dignissim sagittis. Pellentesque egestas,
                neque sit amet convallis pulvinar, justo nulla eleifend augue,
                ac auctor orci leo non est. Phasellus volutpat, metus eget
                egestas mollis, lacus lacus blandit dui, id egestas quam
                mauris ut lacus. Cras dapibus. Praesent adipiscing.
              </p>
            </div>
          </li> -->
          <!-- services-list__item -->
          <!-- <li class="services-list__item">
            <div class="services-list__item-header">
              <h5>E-Commerce</h5>
            </div>
            <div class="services-list__item-body">
              <p>
                Praesent ac sem eget est egestas volutpat. Nam pretium turpis
                et arcu. Quisque ut nisi. Vestibulum rutrum, mi nec elementum
                vehicula, eros quam gravida nisl, id fringilla neque ante vel
                mi. Phasellus dolor. Aenean vulputate eleifend tellus. Nullam
                vel sem. Nam ipsum risus, rutrum vitae, vestibulum eu,
                molestie vel.
              </p>
            </div>
          </li> -->
          <!-- services-list__item -->
        </ul>
        <!-- end services-list -->
      </div>
    </div>
    <!-- s-services__content -->
  </section>
  <!-- end s-services -->

  <!-- portfolio
    ================================================== -->
  <section id="portfolio" class="s-portfolio target-section">
    <div class="row s-portfolio__header">
      <div class="column large-6 medium-8 tab-full">
        <div class="section-intro" data-num="03" data-aos="fade-up">
          <h3 class="subhead">Portfolio</h3>
          <h1 class="display-1">
            A selection of recent projects I have worked on.
          </h1>
        </div>
      </div>
    </div>
    <!-- s-porfolio__header -->

    <div class="row s-porfolio__list block-large-1-2 block-tab-full collapse">
      <div class="column" data-aos="fade-up">
        <div class="folio-item">
          <div class="folio-item__thumb">
            <a class="folio-item__thumb-link" href="images/portfolio/tswmall.png" title="TswMall" data-size="1050x700">
              <img src="images/portfolio/tswmall.png" srcset="
                    images/portfolio/tswmall.png   1x,
                    images/portfolio/tswmall.png 2x
                  " alt="" />
            </a>
          </div>
          <div class="folio-item__info">
            <div class="folio-item__cat">Full-Stack Website</div>
            <h4 class="folio-item__title">tswmall.com</h4>
          </div>
          <a href="https://tswmall.com/" title="Project Link" class="folio-item__project-link">Project Link</a>
          <div class="folio-item__caption">
            <p>
              Built using HTML CSS and Laravel for the backend.
            </p>
          </div>
        </div>
      </div>
      <!-- end column -->
      <div class="column" data-aos="fade-up">
        <div class="folio-item">
          <div class="folio-item__thumb">
            <a class="folio-item__thumb-link" href="images/portfolio/medup.png" title="Medup" data-size="1050x700">
              <img src="images/portfolio/medup.png" srcset="
                    images/portfolio/medup.png
                  " alt="" />
            </a>
          </div>
          <div class="folio-item__info">
            <div class="folio-item__cat">Frontend Design</div>
            <h4 class="folio-item__title">MedUp</h4>
          </div>
          <a href="https://musing-hopper-eba88b.netlify.app/#/" title="Project Link" class="folio-item__project-link">Project Link</a>
          <div class="folio-item__caption">
            <p>
              Frontend Blog type Design using HTML CSS(Bootstrap)
            </p>
          </div>
        </div>
      </div>
      <!-- end column -->
      <div class="column" data-aos="fade-up">
        <div class="folio-item">
          <div class="folio-item__thumb">
            <a class="folio-item__thumb-link" href="images/portfolio/nucamp.png" title="Nucamp Camp" data-size="1050x700">
              <img src="images/portfolio/nucamp.png" srcset="
                    images/portfolio/nucamp.png   1x,
                    images/portfolio/nucamp.png
                  " alt="" />
            </a>
          </div>
          <div class="folio-item__info">
            <div class="folio-item__cat">React Site</div>
            <h4 class="folio-item__title">Nucamp Camp</h4>
          </div>
          <a href="https://amazing-meninsky-f4be9d.netlify.app/index.html" title="Project Link" class="folio-item__project-link">Project Link</a>
          <div class="folio-item__caption">
            <p>
              Project built using HTML CSS and JavaScript(React)
            </p>
          </div>
        </div>
      </div>
      <!-- end column -->
      <div class="column" data-aos="fade-up">
        <div class="folio-item">
          <div class="folio-item__thumb">
            <a class="folio-item__thumb-link" href="images/portfolio/promoemail.png" title="Amazon Promo" data-size="1050x700">
              <img src="images/portfolio/promoemail.png" srcset="
                    images/portfolio/promoemail.png   1x,
                    images/portfolio/promoemail.png 2x
                  " alt="" />
            </a>
          </div>
          <div class="folio-item__info">
            <div class="folio-item__cat">Promotional Email (Email Development)</div>
            <h4 class="folio-item__title">Amazon Promo</h4>
          </div>
          <a href="https://reverent-lewin-3bef65.netlify.app//" title="Project Link" class="folio-item__project-link">Project Link</a>
          <div class="folio-item__caption">
            <p>
              HTML Promotional Email built using HTML and Foundation(Framework)
            </p>
          </div>
        </div>
      </div>
      <!-- end column -->
      <!-- <div class="column" data-aos="fade-up">
        <div class="folio-item">
          <div class="folio-item__thumb">
            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-woodcraft.jpg" title="Sand Dunes" data-size="1050x700">
              <img src="images/portfolio/woodcraft.jpg" srcset="
                    images/portfolio/woodcraft.jpg    1x,
                    images/portfolio/woodcraft@2x.jpg 2x
                  " alt="" />
            </a>
          </div>
          <div class="folio-item__info">
            <div class="folio-item__cat">Product Design</div>
            <h4 class="folio-item__title">Wooocraft</h4>
          </div>
          <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
          <div class="folio-item__caption">
            <p>
              Vero molestiae sed aut natus excepturi. Et tempora numquam.
              Temporibus iusto quo.Unde dolorem corrupti neque nisi.
            </p>
          </div>
        </div>
      </div> -->
      <!-- end column -->
      <!-- <div class="column" data-aos="fade-up">
        <div class="folio-item">
          <div class="folio-item__thumb">
            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-lamp.jpg" title="The Lamp" data-size="1050x700">
              <img src="images/portfolio/lamp.jpg" srcset="
                    images/portfolio/lamp.jpg    1x,
                    images/portfolio/lamp@2x.jpg 2x
                  " alt="" />
            </a>
          </div>
          <div class="folio-item__info">
            <div class="folio-item__cat">Product Design</div>
            <h4 class="folio-item__title">The Lamp</h4>
          </div>
          <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
          <div class="folio-item__caption">
            <p>
              Vero molestiae sed aut natus excepturi. Et tempora numquam.
              Temporibus iusto quo.Unde dolorem corrupti neque nisi.
            </p>
          </div>
        </div>
      </div> -->
      <!-- end column -->
    </div>
    <!-- folio-list -->
  </section>
  <!-- end portfolio -->



  <!-- CTA
        ================================================== -->
  <!-- <div class="s-cta">
    <div class="row">
      <div class="column large-full">
        <h2 class="section-desc" data-aos="fade-up">
          Need a great reliable web hosting?
        </h2>
      </div>
    </div>

    <div class="row cta-content" data-aos="fade-up">
      <div class="column large-full">
        <p>
          We highly recommend
          <a href="https://www.dreamhost.com/r.cgi?287326">DreamHost</a>.
          Powerful web and Wordpress hosting. Guaranteed. Starting at $2.95
          per month.
        </p>

        <a href="https://www.dreamhost.com/r.cgi?287326" class="btn btn--primary h-full-width">Get Started</a>
      </div>
    </div> -->
  <!-- end cta-content -->
  </div>
  <!-- end s-cta -->
  </section>
  <!-- end s-testimonials -->

  <!-- footer
    ================================================== -->
  <footer class="s-footer h-dark-bg">
    <div class="right-vert-line"></div>

    <div class="row s-footer__main">
      <div class="column large-6">
        <div class="section-intro" data-aos="fade-up">
          <h3 class="subhead">Get In Touch</h3>

          <h1 class="display-1">
            For Collaboration and Opportuntites: Let's Transform Your Vision into Reality!
          </h1>
        </div>

        <div class="footer-email-us">
          <a href="mailto:qualekes@gmail.com" class="btn btn--primary h-full-width">Let's Talk</a>
        </div>
      </div>

      <div class="column large-5">
        <div class="footer-contacts">
          <div class="footer-contact-block" data-aos="fade-up">
            <h5 class="footer-contact-block__header">Email</h5>
            <p class="footer-contact-block__content">
              <a href="mailto:#0">qualekes@gmail.com</a>
            </p>
          </div>
          <!-- end footer-contact-block -->
          <!-- <div class="footer-contact-block" data-aos="fade-up">
            <h5 class="footer-contact-block__header">Phone</h5>
            <p class="footer-contact-block__content">
              <a href="tel:+1975432345">+197 543 2345</a>
            </p>
          </div> -->
          <!-- end footer-contact-block -->
          <br />
          <!-- <div class="footer-contact-block" data-aos="fade-up">
            <h5 class="footer-contact-block__header">Social</h5>
            <ul class="footer-contact-block__list">
              <li><a href="#0">Twitter</a></li>
              <li><a href="#0">Instagram</a></li>
              <li><a href="#0">Behance</a></li>
              <li><a href="#0">Dribbble</a></li>
            </ul>
          </div> -->
          <!-- end footer-contact-block -->
        </div>
      </div>
    </div>
    <!-- end s-footer__main -->

    <!-- <div class="row s-footer__bottom">
      <div class="column large-full ss-copyright">
        <span>© Copyright Ethos 2019</span>
        <span>Design by
          <a href="https://www.styleshout.com/">StyleShout</a></span>
      </div> -->
    <!-- end ss-copyright -->

    <div class="ss-go-top">
      <a class="smoothscroll" title="Back to Top" href="#top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M12 0l8 9h-6v15h-4v-15h-6z" />
        </svg>
      </a>
    </div>
    <!-- end ss-go-top -->
    </div>
    <!-- end s-footer__bottom -->
  </footer>
  <!-- end s-footer -->

  <!-- photoswipe background
    ================================================== -->
  <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end photoSwipe background -->
  <?php
  require 'includes/scripts.php';

  ?>

</body>

</html>