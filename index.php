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
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">How It Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Benefits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
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
 <section class="features py-5" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-area">
                    <h6 class="text-primary text-bold">Features</h6>
                    <h2 class="roboto-bold mb-4 fs-2">Powerful Features for Efficient HR Management</h2>
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
            <div class="col-lg-6">
                <!-- <div class="image-com">
                    <img src="assets/images/powerful-features-for-efficient-hr-management.jpg" alt="">
                </div> -->
                <div class="image-wrapper">
                    <div class="images position-relative">
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
 <section class="how-its-works features py-5">
  <div class="container">

    <div class="d-flex justify-content-center">

      <ul class="nav nav-tabs" role="tablist">

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

    <div class="tab-content mt-5">

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
      </div><!-- End tab content item -->

    </div>

  </div>
 </section>
<!-- section how its works end -->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/fontawesome.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>