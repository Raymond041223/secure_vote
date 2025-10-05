<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Vote Ph</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="static.css">
</head>
<body>
  <?php session_start(); ?>


    <header class="navbar">
        <div class="logo">
            <i class="fa-solid fa-shield"></i>
            <div>
                <h1>Secure Vote Ph</h1>
                <p>Trusted Democracy</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#features">Features</a></li>
                <li><a href="#security">Security</a></li>
                <li><a href="#geolocation">Geolocation</a></li>
                <li><a href="#analytics">Analytics</a></li>
            </ul>
        </nav>
        <div class="nav-buttons">
            <button class="btn-outline">Learn More</button>
            <button class="btn-fill">Get Started</button>
          </div>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1>The Future of <br><span>Democratic Voting</span></h1>
            <p>Experience unparalleled security, transparency, and reliability with Secure Vote Ph. 
              Every vote matters, every voice is heard, and every election is protected.</p>
            <button class="election-btn">Start Your Election</button> 
        </div> 
    </section>

    <section class="features" id="features">
        <h2> Why Choose Secure Vote Ph?</h2>
        <p>Our platform combines cutting-edge technology, unmatched security,
        and intuitive design to deliver the most trusted and comprehensive
        voting experience in the Philippines.</p>
        
        <div class="feature-grid">
                    <!--card 1 -->
            <div class="feature-card">
                <span class="icon"><i class="fa-solid fa-shield-halved"></i></span>
                <h3>Enterprise Security</h3>
                <p>Military-grade encryption with blockchain verification and multi-layer
                authentication</p>
                <div class="image-box">
                    <img src="https://img.freepik.com/free-vector/cyber-security-concept-illustration_114360-1670.jpg" alt="Security Illustration">
                </div>
            </div>

                    <!--card 2 -->
            <div class="feature-card">
                <span class="icon"><i class="fa-solid fa-chart-line"></i></span>
                <h3>Real-time Analytics</h3>
                <p>Live dashboards with comprehensive insights and detailed reporting capabilities</p>
                <div class="image-box">
                    <img src="https://img.freepik.com/free-vector/business-analytics-concept_23-2147839484.jpg" alt="Analytics Illustration">
                </div>
            </div>

                    <!--card 3 -->
            <div class="feature-card">
                <span class="icon"><i class="fa-solid fa-laptop-code"></i></span>
                <h3>Intuitive Design</h3>
                <p>Experience the next generation of digital democracy with features designed for
                the modern world.</p>
                <div class="image-box">
                    <img src="https://img.freepik.com/free-vector/cyber-security-concept-illustration_114360-1670.jpg" alt="Security Illustration">
                </div>
            </div>

        </div>
    </section>

          <!-- Capabilities -->
  <section class="capabilities" id="capabilities">
    <div class="cap-row">

        <div class="capabilities-content">
            <h2>Advanced Platform Capabilities</h2>
                <p>Experience the next generation of digital democracy with features designed for the modern world.</p>
                              
            <ul class="capabilities-list">

            <li>
                <i class="fas fa-shield-alt"></i>
                <div>
                    <h3>Enterprise Security</h3>
                    <p>Military-grade encryption with blockchain verification and multi-layer authentication</p>
                </div>
            </li>
                            
            <li>
                <i class="fas fa-headset"></i>
                <div>
                    <h3>24/7 Expert Support</h3>
                    <p>Round-the-clock technical assistance with dedicated account managers</p>
                </div>
            </li>
                                    
            <li>
                <i class="fas fa-bolt"></i>
                <div>
                    <h3>Lightning Fast</h3>
                    <p>Anonymous voting with complete privacy assurance and GDPR compliance</p>
                </div>
            </li>
                                      
            <li>
                <i class="fas fa-lock"></i>
                <div>
                    <h3>Privacy Protection</h3>
                    <p>Anonymous voting with complete privacy assurance and GDPR compliance</p>
                </div>
            </li>
        </ul>
    </div>
                              
                                
    <!-- Right column image box -->
    <div class="capabilities-image">
        <div class="image-placeholder">
            <img src="https://img.freepik.com/free-vector/security-concept-illustration_114360-1116.jpg" alt="Platform Security Illustration">
        </div>
    </div>
</div>
</section>

<!-- Security Section -->

<section class="security-header" id="security">
    <h1>Uncompromising Security</h1>
    <p>Your elections are protected by enterprise-grade security measures, blockchain technology,
      and advanced encryption protocols trusted by government institutions worldwide.</p>
  </section>
  

  <section class="security-grid">
    <div class="image-box">
      <img src="https://img.freepik.com/free-vector/blockchain-technology-concept_114360-1935.jpg" alt="Security illustration">
    </div>
  
    <!-- right content -->
    <div class="text-box">
      <h2>Advanced Platform Capabilities</h2>
      <p>Every vote is protected by multiple layers of security, from end-to-end encryption to blockchain verification and biometric authentication.</p>
  
      <ul class="security-list">
        <li>
          <span class="icon"><i class="fa-solid fa-lock"></i></span>
          <div class="feature-text">
            <h3>Privacy Protection</h3>
            <p>Anonymous voting with complete privacy assurance and GDPR compliance</p>
          </div>
        </li>
  
        <li>
          <span class="icon"><i class="fa-solid fa-shield"></i></span>
          <div class="feature-text">
            <h3>Enterprise Security</h3>
            <p>Military-grade encryption with blockchain verification and multi-layer authentication</p>
          </div>
        </li>
  
        <li>
          <span class="icon"><i class="fa-solid fa-headset"></i></span>
          <div class="feature-text">
            <h3>24/7 Expert Support</h3>
            <p>Round-the-clock technical assistance with dedicated account managers</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Geolocation section -->
  <section class="geolocation" id="geolocation">
    <div class="geo-row">

        <div class="geolocation-content">
            <h2>Set Voting Boundaries</h2>
                <p>Define precise geographic boundaries for your elections. Control where voters can participate with customizable radius settings,
                ensuring elections remain secure and geographically relevant.</p>
                              
            <ul class="geolocation-list">

            <li>
                <span class="icon"><i class="fa-solid fa-lock"></i></span>  
                <div>
                    <h3>Custom Radius Control</h3>
                    <p>Set voting radius from 100 meters to 50 kilometers. Perfect for campus elections, local government, or regional voting.</p>
                </div>
            </li>
                                    
            <li>
                <i class="fas fa-bolt"></i>
                <div>
                    <h3>Real-time Location Tracking</h3>
                    <p>Monitor voter locations in real-time with privacy-compliant tracking and automatic boundary enforcement.</p>
                </div>
            </li>
                                      
            <li>
                <i class="fas fa-lock"></i>
                <div>
                    <h3>Flexible Zone Configuration</h3>
                    <p>Configure multiple voting zones, exclude specific areas, and set different rules for different voter groups.</p>
                </div>
            </li>
        </ul>
    </div>
                                                          
    <!-- Right column image box -->
    <div class="geolocaton-image">
        <div class="image-placeholder">
            <img src="https://img.freepik.com/free-vector/security-concept-illustration_114360-1116.jpg" alt="Platform Security Illustration">
        </div>
    </div>
</div>

    <div class="geolocation-card">
      <!-- Card 1 -->
      <div class="geo-card">
        <div class="icon-box"><i class="fa-solid fa-shield-halved"></i></div>
        <h3>Global Compatibility</h3>
        <p>Works worldwide with GPS and network-based location services</p>
        <ul>
          <li>GPS Compatibility</li>
          <li>Network location fallback</li>
          <li>Works on all devices</li>
        </ul>
      </div>
  
      <!-- Card 2 -->
      <div class="geo-card">
        <div class="icon-box"><i class="fa-solid fa-chart-line"></i></div>
        <h3>Voter Management</h3>
        <p>Track and manage voter participation with location-based analytics</p>
        <ul>
          <li>Live voter tracking</li>
          <li>Participation heatmaps</li>
          <li>Geographic analytics</li>
        </ul>
      </div>
  
      <!-- Card 3 -->
      <div class="geo-card">
        <div class="icon-box"><i class="fa-solid fa-user-shield"></i></div>
        <h3>Privacy Protection</h3>
        <p>GDPR-compliant location tracking with voter privacy safeguards</p>
        <ul>
          <li>Encrypted location data</li>
          <li>Automatic data deletion</li>
          <li>Consent management</li>
        </ul>
      </div>
    </div>

    <!--  PERFECT VARIOUS SCENARIO  --> 

    <div class="scenarios">
        <h2>Perfect for Various Scenarios</h2>
        <p>Geolocation controls adapt to any voting situation</p>
    
        <div class="scenarios-grid">
          <div class="scenario">
            <div class="icon-box"><i class="fa-solid fa-shield"></i></div>
            <h3>Campus Elections</h3>
            <p>Restrict voting to university grounds</p>
          </div>
          <div class="scenario">
            <div class="icon-box"><i class="fa-solid fa-building"></i></div>
            <h3>Local Government</h3>
            <p>Ensure voters are in the correct district</p>
          </div>
          <div class="scenario">
            <div class="icon-box"><i class="fa-solid fa-briefcase"></i></div>
            <h3>Corporate Voting</h3>
            <p>Limit to office buildings or work areas</p>
          </div>
          <div class="scenario">
            <div class="icon-box"><i class="fa-solid fa-calendar-days"></i></div>
            <h3>Event Voting</h3>
            <p>Conference or event-specific boundaries</p>
          </div>
        </div>
      </div>

</section>

<!--  analytics section  -->

<section class="analytics-header">
    <h1>Powerful Analytics</h1>
    <p>Gain deep insights into your elections with comprehensive real-time analytics, detailed
        reporting, and interactive dashboards that help you understand voter behavior and trends.
    </p>
  </section>
                      
  <section class="analytics" id="analytics">
    <div class="analytics-row">

        <div class="analytics-content">
            <h2>Real-time Dashboard</h2>
                <p>Monitor your election progress live with interactive charts, voter participation metrics, and instant result
                updates as votes are cast and verified.</p>
                              
            <ul class="analytics-list">

            <li>
                <span class="icon"><i class="fa-solid fa-shield"></i></span>  
                <div>
                    <h3>Live Vote Counting</h3>
                    <p>Live Vote Counting Watch votes come in real-time with automatic
                    updates and instant result calculations.</p>
                </div>
            </li>
                                    
            <li>
                <i class="fas fa-bolt"></i>
                <div>
                    <h3>Participation Trends</h3>
                    <p>Track voter turnout patterns, peak voting times, and demographic participation rates.</p>
                </div>
            </li>
                                      
            <li>
                <i class="fas fa-lock"></i>
                <div>
                    <h3>Advanced Segmentation</h3>
                    <p>Analyze results by demographics, location, voting method, and custom voter segments.</p>
                </div>
            </li>
        </ul>
    </div>
                                                          
    <!-- Right column image box -->
    <div class="analytics-image">
        <div class="image-placeholder">
            <img src="https://img.freepik.com/free-vector/security-concept-illustration_114360-1116.jpg" alt="Platform Security Illustration">
        </div>
    </div>
</div>

    <div class="analytics-card">
      <!-- Card 1 -->
      <div class="anal-card">
        <div class="icon-box"><i class="fa-solid fa-shield-halved"></i></div>
        <h3>Export & Reports</h3>
        <p>Generate comprehensive reports in multiple formats for stakeholders</p>
        <ul>
          <li>PDF detailed reports</li>
          <li>Excel data exports</li>
          <li>Excel data exports</li>
        </ul>
      </div>
  
      <!-- Card 2 -->
      <div class="anal-card">
        <div class="icon-box"><i class="fa-solid fa-chart-line"></i></div>
        <h3>Real-time Sharing</h3>
        <p>Real-time Sharing Share live results and insights with stakeholders instantly</p>
        <ul>
          <li>Public result pages</li>
          <li>Embeddable widgets</li>
          <li>Social media integration</li>
        </ul>
      </div>
  
      <!-- Card 3 -->
      <div class="anal-card">
        <div class="icon-box"><i class="fa-solid fa-user-shield"></i></div>
        <h3>Performance Metrics</h3>
        <p>Monitor system performance and election health metrics</p>
        <ul>
          <li>System uptime tracking</li>
          <li>Vote processing speed</li>
          <li>Error rate monitoring</li>
        </ul>
      </div>
    </div>
</section>

<!-- democracy header -->
<section class="democracy-header">
  <h1>Ready to Transform Democracy?</h1>
  <p>Join thousands of organizations revolutionizing elections with Secure Vote Ph. 
    Experience enterprise-grade security, real-time analytics, and seamless user experience.</p>
</section>






<section class="transform-section" id="login-now">
  <div class="transform-container">
    <!-- LEFT SIDE -->
    <div class="info-side">
      <h1 class="title">Ready to Transform Democracy?</h1>
      <p class="subtitle">
        Join thousands of organizations revolutionizing elections with Secure Vote Ph.
        Experience enterprise-grade security, real-time analytics, and seamless user experience.
      </p>

      <div class="feature">
        <div class="icon">🗳️</div>
        <div>
          <h3>Live Vote Counting</h3>
          <p>Watch votes come in real-time with automatic updates and instant result calculations.</p>
        </div>
      </div>

      <div class="feature">
        <div class="icon">⚡</div>
        <div>
          <h3>Participation Trends</h3>
          <p>Track voter turnout patterns, peak voting times, and demographic participation rates.</p>
        </div>
      </div>

      <div class="feature">
        <div class="icon">🔒</div>
        <div>
          <h3>Advanced Segmentation</h3>
          <p>Analyze results by demographics, location, voting method, and custom voter segments.</p>
        </div>
      </div>

      <div class="testimonial">
        <div class="avatar">
          <img src="https://i.imgur.com/bZQxvVf.png" alt="Profile">
        </div>
        <div>
          <p class="quote">
            "Secure Vote Ph transformed how we conduct student elections. The platform is incredibly secure and
            user-friendly."
          </p>
          <p class="author"><strong>Mr. Niel Ezequiel Dungao</strong><br><small>CIO, Z Developers</small></p>
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="auth-side">
      <div class="auth-toggle">
        <button id="signinBtn" class="toggle-btn active">Sign In</button>
        <button id="signupBtn" class="toggle-btn">Sign Up</button>
      </div>

      <!-- Sign In Form -->
      <form id="signinForm" action="logging.php" method="POST" class="auth-form">
        <h2 class="auth-title">Welcome Back</h2>
        <p class="auth-subtitle">Sign in to your Secure Vote Ph account</p>

        <label>Email Address</label>
        <input type="email" name="email" placeholder="your@organization.com" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <div class="forgot"><a href="#">Forgot Password?</a></div>

        <button type="submit" name="signin" class="auth-btn">Sign In</button>

        <div class="divider"><span>OR CONTINUE WITH SSO</span></div>

        <button type="button" class="google-btn">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Logo">
          Google
        </button>
      </form>

      <!-- Sign Up Form -->
      <form id="signupForm" action="logging.php" method="POST" class="auth-form hidden">
        <h2 class="auth-title">Welcome Back</h2>
        <p class="auth-subtitle">Sign in to your Secure Vote Ph account</p>

        <div class="name-group">
          <div>
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="John" required>
          </div>
          <div>
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Doe" required>
          </div>
        </div>

        <label>Work Email</label>
        <input type="email" name="email" placeholder="john@work.com.ph" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Enter your confirm password" required>

        <div class="forgot"><a href="#">Forgot Password?</a></div>

        <button type="submit" name="signup" class="auth-btn">Sign Up</button>

        <div class="divider"><span>OR CONTINUE WITH SSO</span></div>

        <button type="button" class="google-btn">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Logo">
          Google
        </button>
      </form>
    </div>
  </div>
</section>


<!-- Footer Section -->
<footer class="footer">
<div class="footer-container">

<!-- Left: Company Info -->
<div class="footer-about">
  <h3>Secure Vote Ph</h3>
  <p class="tagline">Trusted Democracy</p>
  <p>
    The Philippines' leading digital voting platform, empowering organizations to conduct 
    secure, transparent, and reliable elections with cutting-edge technology.
  </p>
  <ul class="footer-contact">
    <li><i class="fa-solid fa-shield"></i> customerservice@securevoteph.com</li>
    <li><i class="fa-solid fa-phone"></i> (+63) 912 345 6789</li>
    <li><i class="fa-solid fa-location-dot"></i> Polytechnic University of the Philippines</li>
  </ul>
  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
    <a href="#"><i class="fa-brands fa-google"></i></a>
  </div>
</div>

<!-- Middle: Platform -->
<div class="footer-links">
  <h4>Platform</h4>
  <ul>
    <li><a href="#">Features</a></li>
    <li><a href="#">Security</a></li>
    <li><a href="#">Analytics</a></li>
    <li><a href="#">API Documentation</a></li>
  </ul>
</div>

<!-- Right: Support -->
<div class="footer-links">
  <h4>Support</h4>
  <ul>
    <li><a href="#">Help Center</a></li>
    <li><a href="#">Documentation</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</div>

</div>

<hr />

<!-- Bottom Bar -->
<div class="footer-bottom">
<p>© 2025 Z Developers. All rights reserved.</p>
<div class="footer-policies">
  <a href="#">Privacy Policy</a>
  <a href="#">Terms of Service</a>
  <a href="#">Cookies Policy</a>
  <a href="#">Compliance</a>
</div>
</div>
</footer>
  </div>
    
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 60, 
              behavior: "smooth"
            });
          }
        });
      });

    const signinBtn = document.getElementById("signinBtn");
    const signupBtn = document.getElementById("signupBtn");
    const signinForm = document.getElementById("signinForm");
    const signupForm = document.getElementById("signupForm");

    signinBtn.addEventListener("click", () => {
      signinBtn.classList.add("active");
      signupBtn.classList.remove("active");
      signinForm.classList.remove("hidden");
      signupForm.classList.add("hidden");
    });

    signupBtn.addEventListener("click", () => {
      signupBtn.classList.add("active");
      signinBtn.classList.remove("active");
      signupForm.classList.remove("hidden");
      signinForm.classList.add("hidden");
    });
  </script>

</body>
</html>

?>