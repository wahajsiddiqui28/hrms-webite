<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    
<!-- Header start  -->
 <header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Fasterpsystems</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#AboutUs">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features-2">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#HowItWorks">How It Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features-cards">Benefits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
            <div class="buttons">
                <button class="btn" style="background: #faaf40;"> <a  class="text-black" href="#">Request a Demo</a>  </button>
                <button class="btn" style="border: 1px solid #faaf40; background: none;"> <a href="#"> Sign Up </a> </button>
            </div>
          </div>
        </div>
      </nav>
 </header>
<!-- Header end -->
<!-- Section banner start -->
 <section class="banner" id="home">
    <div class="container">
      <div class="banner-inner">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text-area text-white">
                    <h1 class="roboto-black" style="color: #faaf40;">Simplify Your HR with Management  Fasterpsystems</h1>
                    <p class="py-3">Streamline your HR processes with an all-in-one platform designed for efficiency, accuracy, and employee satisfaction.</p>
                    <div class="buttons">
                        <button class="btn" style="background: #faaf40;"> <a class="text-black" href="#">Request a Demo</a>  </button>
                        <button class="btn" style="border: 1px solid #faaf40; background: none;"> <a href="#"> Sign Up </a> </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-com">
                    <img src="assets/images/banner_image.webp" alt="">
                </div>
            </div>
        </div>
      </div>
    </div>
 </section>
<!-- Section banner end -->
<!-- section features start  -->
 <section class="features py-5" id="AboutUs">
    <div class="container aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="text-area">
                    <h6 class="text-primary text-bold">About us</h6>
                    <h2 class="roboto-bold mb-4 fs-2">Powerful About for Efficient HR Management</h2>
                    <ul class="info-list p-0">
                        <li><i class="fa-solid fa-users"></i> Employee Management: Centralized profiles, attendance, payroll.</li>
                        <li> <i class="fa-solid fa-chart-simple"></i> Performance Reviews: Track progress and feedback. </li>
                        <li><i class="fa-regular fa-calendar-days"></i> Performance Reviews: Track progress and feedback. </li>
                        <li><i class="fa-solid fa-file-circle-check"></i> Recruitment Tools: Streamline onboarding.  </li>
                        <li><i class="fa-solid fa-dollar-sign"></i> Payroll Integration: Sync with accounting.  </li>
                        <li><i class="fa-solid fa-shield-halved"></i> Secure Data Analytics: Insights at your fingertips.  </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <!-- <div class="image-com">
                    <img src="assets/images/powerful-features-for-efficient-hr-management.jpg" alt="">
                </div> -->
                <div class="image-wrapper">
                    <div class="images position-relative aos-init aos-animate" data-aos="zoom-out" data-aos-delay="400">
                      <img src="assets/images/powerful-features-for-efficient-hr-management.jpg" alt="Business Meeting" class="img-fluid main-image rounded-4">
                      <img src="assets/images/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
                    </div>
                    <div class="experience-badge floating">
                      <h3>15+ <span>Years</span></h3>
                      <p>Of experience in business service</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
 </section>
<!-- section features end -->
<!-- section how its works start  -->
 <section class="how-its-works features py-5" id="HowItWorks">
  <div class="container aos-animate">
 
    <div class="d-flex justify-content-center">
      <ul class="nav nav-tabs aos-init aos-animate" role="tablist" data-aos="fade-up" data-aos-delay="100" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link show active" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
            <h4 class="mb-0">Add Employees</h4>
          </a>
        </li><!-- End tab nav item -->
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" role="tab" tabindex="-1">
            <h4 class="mb-0">Track Attendance</h4>
          </a><!-- End tab nav item -->
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" role="tab" tabindex="-1">
            <h4 class="mb-0">Generate Payroll</h4>
          </a>
        </li><!-- End tab nav item -->
      </ul>
    </div>
    <div class="tab-content mt-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
      <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Add Employees</h3>
            <p class="fst-italic">
              Employees can check in and out using biometric devices, mobile apps, or manual entry. Automatic calculation of hours worked, overtime, and leaves is integrated. Managers can view attendance summaries and approve/reject leave requests directly.
            </p>
            <ul class="info-list">
              <li> <span>Employees can check in and out using biometric devices, mobile apps, or manual entry.</span></li>
              <li> <span>Automatic calculation of hours worked, overtime, and leaves is integrated.</span></li>
              <li> <span>Managers can view attendance summaries and approve/reject leave requests directly.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center images-how-it-works">
            <img src="assets/images/addemployees.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->
      <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Generate Payroll</h3>
            <p class="fst-italic">
              HRMS automatically calculates salaries based on attendance, overtime, deductions, and tax compliance. It generates detailed payslips for employees and supports direct bank transfers. You can customize salary components (e.g., basic pay, allowances, bonuses). Payroll reports can be exported for accounting and compliance purposes.
            </p>
            <ul class="info-list">
              <li> <span>HRMS automatically calculates salaries based on attendance, overtime, deductions, and tax compliance.</span></li>
              <li> <span>It generates detailed payslips for employees and supports direct bank transfers.</span></li>
              <li> <span>You can customize salary components (e.g., basic pay, allowances, bonuses).</span></li>
              <li> <span>Payroll reports can be exported for accounting and compliance purposes.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center images-how-it-works">
            <img src="assets/images/generate-payroll.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->
      <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Track Attendance</h3>
            <ul class="info-list">
              <li> <span>Employees can check in and out using biometric devices, mobile apps, or manual entry.</span></li>
              <li> <span>Automatic calculation of hours worked, overtime, and leaves is integrated.</span></li>
              <li> <span>Managers can view attendance summaries and approve/reject leave requests directly.</span></li>
            </ul>
            <p class="fst-italic">
              Employees can check in and out using biometric devices, mobile apps, or manual entry. Automatic calculation of hours worked, overtime, and leaves is integrated. Managers can view attendance summaries and approve/reject leave requests directly.
            </p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center images-how-it-works">
            <img src="assets/images//trackattendance.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>
<!-- section how its works end -->
<section id="features-2" class="features-2 section py-5" id="featuresSEV">
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      <!-- <h3 class="text-center mb-1 fs-1 fw-bold heading-com" style="color: var(--yellow-text);">Features</h3> -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div class="feature-item text-end mb-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
              <div class="d-flex align-items-center justify-content-end gap-4">
                <div class="feature-content">
                  <h3> Recruitment</h3>
                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
                </div>
                <div class="feature-icon flex-shrink-0">
                  <i class="fa-solid fa-user-plus"></i>
                </div>
              </div>
            </div><!-- End .feature-item -->
            <div class="feature-item text-end mb-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
              <div class="d-flex align-items-center justify-content-end gap-4">
                <div class="feature-content">
                  <h3>Hr Management</h3>
                  <p>Phasellus ullamcorper ipsum rutrum nunc nunc nonummy metus vestibulum volutpat sapien arcu sed augue aliquam erat volutpat.</p>
                </div>
                <div class="feature-icon flex-shrink-0">
                  <i class="fa-solid fa-users"></i>
                </div>
              </div>
            </div><!-- End .feature-item -->
            <div class="feature-item text-end aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
              <div class="d-flex align-items-center justify-content-end gap-4">
                <div class="feature-content">
                  <h3>Tasks Management</h3>
                  <p>Aenean tellus metus bibendum sed posuere ac mattis non nunc vestibulum fringilla purus sit amet fermentum aenean commodo.</p>
                </div>
                <div class="feature-icon flex-shrink-0">
                  <i class="fa-solid fa-list-check"></i>
                </div>
              </div>
            </div><!-- End .feature-item -->
          </div>
          <div class="col-lg-4 ">
            <div class="phone-mockup text-center">
              <img src="assets/images/center.png" alt="Phone Mockup" class="img-fluid">
            </div>
          </div><!-- End Phone Mockup -->
          <div class="col-lg-4">
            <div class="feature-item mb-5 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
              <div class="d-flex align-items-center gap-4">
                <div class="feature-icon flex-shrink-0">
                  <i class="fa-solid fa-money-bill-wave"></i>
                </div>
                <div class="feature-content">
                  <h3> Payroll</h3>
                  <p>Donec vitae sapien ut libero venenatis faucibus nullam quis ante etiam sit amet orci eget eros faucibus tincidunt.</p>
                </div>
              </div>
            </div><!-- End .feature-item -->
            <div class="feature-item mb-5 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
              <div class="d-flex align-items-center gap-4">
                <div class="feature-icon flex-shrink-0">
                  <i class="fa-solid fa-user-tie"></i>
                </div>
                <div class="feature-content">
                  <h3>  Attendance Management </h3>
                  <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                </div>
              </div>
            </div><!-- End .feature-item -->
            <div class="feature-item aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
              <div class="d-flex align-items-center gap-4">
                <div class="feature-icon flex-shrink-0">
                  <i class="fa-solid fa-briefcase"></i>
                </div>
                <div class="feature-content">
                  <h3>Careers</h3>
                  <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi aenean vulputate.</p>
                </div>
              </div>
            </div><!-- End .feature-item -->
          </div>
        </div>
      </div>
    </section>
    <!-- Why Choose Fasterpsystems ? start  -->
    <section id="features-cards" class="features-cards section py-4" id="Benefits">
      <div class="container">
        <!-- <h3 class="text-center mb-3 fs-1 fw-bold heading-com" style="color: var(--yellow-text);">Why Choose Fasterpsystems ?</h3> -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Why Choose Fasterpsystems</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <div class="row gy-4 mt-4">
          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
             <i class="bi bi-clock"></i>
              <h4>Save time with automation</h4>
              <p>Automate repetitive HR tasks like attendance tracking, leave approvals, and payroll generation, allowing your team to focus on strategic goals.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-box blue">
              <i class="bi bi-check-all"></i>
              <h4>100% accuracy in payroll processing</h4>
              <p>Eliminate human errors with automated salary calculations, tax deductions, and compliance checks for precise payroll management.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-box green">
              <i class="bi bi-file-earmark-text" style="color: #1b8f59;"></i>
              <h4>Easy compliance reporting</h4>
              <p>Generate detailed, compliant reports for audits, taxes, and government filings with just a few clicks. Stay stress-free during audits!</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-box red">
              <i class="bi bi-person-rolodex" style="color: #9f4141;"></i>
              <h4>Boost employee satisfaction</h4>
              <p>Improve employee morale with transparent policies, self-service portals, and timely salary disbursements.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why Choose Fasterpsystems ? end  -->
    <!-- Pricing start  -->
<section id="pricing" class="pricing section light-background">
<!-- Section Title -->
<div class="container section-title aos-init aos-animate" data-aos="fade-up">
  <h2>Pricing</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->
<div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
  <div class="row g-4 justify-content-center">
    <!-- Basic Plan -->
    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      <div class="pricing-card">
        <h3>Basic Plan</h3>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">9.9</span>
          <span class="period">/ month</span>
        </div>
        <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
        <h4>Featured Included:</h4>
        <ul class="features-list">
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Duis aute irure dolor
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Excepteur sint occaecat
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Nemo enim ipsam voluptatem
          </li>
        </ul>
        <a href="#" class="btn btn-primary">
          Buy Now
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
    <!-- Standard Plan -->
    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
      <div class="pricing-card popular">
        <div class="popular-badge">Most Popular</div>
        <h3>Standard Plan</h3>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">19.9</span>
          <span class="period">/ month</span>
        </div>
        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
        <h4>Featured Included:</h4>
        <ul class="features-list">
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Lorem ipsum dolor sit amet
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Consectetur adipiscing elit
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Sed do eiusmod tempor
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Ut labore et dolore magna
          </li>
        </ul>
        <a href="#" class="btn btn-light w-100">
          Buy Now
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
    <!-- Premium Plan -->
    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
      <div class="pricing-card">
        <h3>Premium Plan</h3>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">39.9</span>
          <span class="period">/ month</span>
        </div>
        <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
        <h4>Featured Included:</h4>
        <ul class="features-list">
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Temporibus autem quibusdam
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Saepe eveniet ut et voluptates
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Nam libero tempore soluta
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Cumque nihil impedit quo
          </li>
          <li>
            <i class="bi bi-check-circle-fill"></i>
            Maxime placeat facere possimus
          </li>
        </ul>
        <a href="#" class="btn btn-primary">
          Buy Now
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Pricing end -->
<!-- Testimonials start  -->
<section id="testimonials" class="testimonials section light-background">
<!-- Section Title -->
<div class="container section-title aos-init aos-animate" data-aos="fade-up">
  <h2>Testimonials</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->
<div class="container">
  <div class="row g-5">
    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      <div class="testimonial-item">
        <img src="assets/images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->
    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
      <div class="testimonial-item">
        <img src="assets/images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
        <h3>Sara Wilsson</h3>
        <h4>Designer</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->
    <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
      <div class="testimonial-item">
        <img src="assets/images/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
        <h3>Jena Karlis</h3>
        <h4>Store Owner</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->
    <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
      <div class="testimonial-item">
        <img src="assets/images/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
        <h3>Matt Brandon</h3>
        <h4>Freelancer</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->
  </div>
</div>
</section>
<!-- Testimonials end -->
<!-- Contact Us start  -->
<section id="contact" class="contact section light-background">
<!-- Section Title -->
<div class="container section-title aos-init aos-animate" data-aos="fade-up">
  <h2>Contact</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div>
<div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
  <div class="row g-4 g-lg-5">
    <div class="col-lg-5">
      <div class="info-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <h3>Contact Info</h3>
        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>
        <div class="info-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="content">
            <h4>Our Location</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
          </div>
        </div>
        <div class="info-item aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <i class="bi bi-telephone"></i>
          </div>
          <div class="content">
            <h4>Phone Number</h4>
            <p>+1 5589 55488 55</p>
            <p>+1 6678 254445 41</p>
          </div>
        </div>
        <div class="info-item aos-init" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <i class="bi bi-envelope"></i>
          </div>
          <div class="content">
            <h4>Email Address</h4>
            <p>info@example.com</p>
            <p>contact@example.com</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="contact-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <h3>Get In Touch</h3>
        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>
        <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>
            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>
            <div class="col-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>
            <div class="col-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>
            <div class="col-12 text-center">
              <!-- <div class="loading">Loading</div>
              <div class="error-message"></div> -->
              <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              <button type="submit" class="btn">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Contact Us end -->
<!-- Footer start  -->
<footer id="footer" class="footer pt-5">
<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">Fasterpsystems</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Qasimabad Street</p>
        <p>Pakistan, 5443922</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+92 3327 656 93</span></p>
        <p><strong>Email:</strong> <span>info@example.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Hic solutasetp</h4>
      <ul>
        <li><a href="#">Molestiae accusamus iure</a></li>
        <li><a href="#">Excepturi dignissimos</a></li>
        <li><a href="#">Suscipit distinctio</a></li>
        <li><a href="#">Dilecta</a></li>
        <li><a href="#">Sit quas consectetur</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Nobis illum</h4>
      <ul>
        <li><a href="#">Ipsam</a></li>
        <li><a href="#">Laudantium dolorum</a></li>
        <li><a href="#">Dinera</a></li>
        <li><a href="#">Trodelas</a></li>
        <li><a href="#">Flexo</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Fasterpsystems</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    Designed by <a href="#"> Wahaj Siddiqui (Mr Coder) </a>
  </div>
</div>
</footer>
<!-- Footer end -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/fontawesome.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    AOS.init();
  </script>
  </body>
</html>