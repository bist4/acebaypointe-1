document.addEventListener("DOMContentLoaded", function () {
    const header = `
    // The Top Header
    <div id="topbar" class="header d-flex align-items-center fixed-top">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-auto mb-2 mb-md-0 text-md-start text-center">
          <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
        </div>
        <div class="col-md-auto text-md-end">
          <div class="row justify-content-center justify-content-md-end">
            <div class="col-auto mb-2 mb-md-0">
              <i class="bi bi-telephone"></i> (047) 250-6070 Local 100
            </div>
            <div class="col-auto mb-2 mb-md-0">
              <i class="bi bi-phone"></i> Smart : 0939-915-7633
            </div>
            <div class="col-auto mb-2 mb-md-0">
              <i class="bi bi-phone"></i> Globe: 0917-545-1566
            </div>
            <div class="col-auto">
              <i class="bi bi-phone"></i> Sun: 0922-812-8623
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

    // Main Header
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">HOME</a></li>
          <li class="dropdown"><a href="#"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="about_us.html#wwa ">WHO WE ARE</a></li>
              <li><a class="nav-link scrollto" href="about_us.html#mission_vision">MISSION & VISION</a></li>
              <li><a class="nav-link scrollto" href="about_us.html#core_values">CORE VALUES</a></li>
              <li><a class="nav-link scrollto" href="privacy_policy.html#quality_policy">QUALITY POLICY</a></li>
              <li><a class="nav-link scrollto" href="privacy_policy.html">DATA PRIVARY POLICY</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>NEWS & EVENTS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">NEWS & EVENTS</a></li>
              <li><a href="#">PROMOS & PACKAGES</a></li>
            </ul>
          </li>
          <li><a href="doctors.html">DOCTORS</a></li>
          <li><a href="#">DEPARTMENT & SERVICES</a></li>
          <li><a href="careers.html">CAREERS</a></li>
          <li class="dropdown"><a href="#"><span>PATIENT GUIDE & FEATURES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">VIRTUAL TOUR</a></li>
              <li><a href="#">ADMISSION PROCEDURE</a></li>
              <li><a href="#">ROOM ACCOMMODATIONS</a></li>
              <li><a href="#">PATIENT SAFETY & QUALITY CARE</a></li>
              <li><a href="#">MEDICAL RECORDS</a></li>
              <li><a href="#">HMO PARTNERS</a></li>
              <li><a href="#">PHILHEALTH REQUIREMENTS</a></li>
              <li><a href="#">BILLING & PAYMENT</a></li>
              <li><a href="#">GETTING TO ACEMCBAYPOINTE</a></li>
              <li><a href="#">EMERGENCY & SERVICES.</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact_us.html">CONTACT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
        Appointment</a> -->

    </div>
  </header>  // End Header
    `;

    document.body.insertAdjacentHTML('afterbegin', header);
});

