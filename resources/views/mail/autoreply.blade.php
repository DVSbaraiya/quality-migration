<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Thank you — Quality Migration</title>
  <style>
    /* Basic email reset */
    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
      border: 0;
      outline: none;
      text-decoration: none;
      display: block;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100% !important;
      -webkit-font-smoothing: antialiased;
      background: #f6f8fb;
      font-family: Arial, sans-serif;
    }

    /* Layout */
    .wrapper {
      width: 100%;
      padding: 28px 16px;
    }

    .container {
      max-width: 680px;
      margin: 0 auto;
    }

    .card {
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(20, 32, 56, 0.06);
    }

    /* Brand */
    .brand-bar {
      background: #0055A4;
      padding: 28px 24px;
      text-align: center;
      color: #ffffff;
    }

    .brand-bar h1 {
      margin: 0;
      font-size: 22px;
      font-weight: 700;
      line-height: 1.2;
    }

    .brand-sub {
      margin-top: 8px;
      color: #d7e8ff;
      font-size: 14px;
    }

    .logo-wrap {
      padding: 22px 24px;
      text-align: center;
      background: #ffffff;
    }

    /* Body */
    .card-body {
      padding: 34px 36px;
      text-align: center;
    }

    .thumb {
      font-size: 48px;
      margin-bottom: 14px;
      color: #0055A4;
    }

    .title {
      color: #00345a;
      font-size: 20px;
      font-weight: 700;
      margin: 0 0 12px;
    }

    .message {
      color: #4b5563;
      font-size: 15px;
      line-height: 1.6;
      margin: 0 auto 18px;
      max-width: 520px;
    }

    .cta {
      display: inline-block;
      background: #E62027;
      color: #fff;
      text-decoration: none;
      padding: 10px 18px;
      border-radius: 6px;
      font-weight: 600;
      margin-top: 6px;
    }

    .signature {
      text-align: left;
      margin: 28px auto 0;
      max-width: 520px;
      font-size: 14px;
      color: #333;
    }

    .sig-name {
      font-weight: 700;
      color: #0055A4;
    }

    .contact-row {
      margin-top: 10px;
      color: #6b7280;
      font-size: 13px;
    }

    .footer {
      padding: 14px 20px;
      text-align: center;
      background: #f9fafb;
      color: #7b8794;
      font-size: 13px;
    }

    /* Responsive */
    @media screen and (max-width:520px) {
      .card-body {
        padding: 22px;
      }

      .brand-bar {
        padding: 20px;
      }

      .logo-wrap img {
        max-width: 160px;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="container">

      <div class="card">

        <!-- logo -->
        <div class="logo-wrap">
          <img src="https://www.qualitymigration.com/front/img/logo/logo.png" alt="Quality Migration"
            style="max-width:220px; width:100%; height:auto; margin:0 auto;">
        </div>

        <!-- hero / brand bar -->
        <div class="brand-bar" role="banner">
          <h1>Thank you for contacting Quality Migration</h1>
          <div class="brand-sub">We appreciate your enquiry — our team will reach out shortly.</div>
        </div>

        <!-- content -->
        <div class="card-body">
          <div class="title">We will be in touch shortly</div>

          <p class="message">
            Hi {{ $contact['name'] ?? 'there' }},<br><br>
            Thank you for reaching out through our website. A member of our team will review your enquiry and contact
            you as soon as possible.
          </p>

          <a href="https://www.qualitymigration.com/" style="display: inline-block;
      background: #E62027;
      color: #fff!important;
      text-decoration: none;
      padding: 10px 18px;
      border-radius: 6px;
      font-weight: 600;
      margin-top: 6px;" target="_blank" rel="noopener">Visit our website</a>

          <!-- FOOTER STYLE SIGNATURE -->
          <!-- FOOTER-STYLE SIGNATURE WITH SOCIAL ICONS -->
          <div style="margin:40px auto 0; max-width:600px; font-family:Arial, sans-serif;">

            <!-- top divider -->
            <div style="border-top:1px solid #dbe1e6; margin-bottom:25px;"></div>

            <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
              style="border-spacing:0; font-size:14px; color:#4A4A4A;">
              <tr>
                <!-- Right: Contacts -->
                <td align="center" valign="top" style="padding-top:0; text-align: center;">

                  <div style="font-size:17px; font-weight:700; color:#0055A4; margin-bottom:6px;">
                    Quality Migration
                  </div>

                  <div style="color:#E62027; font-weight:600; margin-bottom:14px;">
                    Education & Visa Services
                  </div>

                  <ul style="list-style:none; padding:0; margin:0; font-size:14px; color:#444; line-height:1.7;">
                    <li>1/18 Haughton Rd, Oakleigh VIC 3166, Australia</li>
                    <li>+61 3851 85858</li>
                    <li>admin@qualitymigration.com</li>
                    <li>www.qualitymigration.com</li>
                  </ul>
                  <!-- Social Icons -->
                  <div style="margin-top:18px; text-align: center;">
                    <ul style="list-style:none; padding:0; margin:0 12px 6px 0;">
                      <li style="font-size:14px; font-weight:700; color:#0055A4; margin-bottom:6px;">
                        Follow us:
                      </li>
                    </ul>
                    <ul style="list-style:none; padding:0; margin:0; display:flex; justify-content:center; gap:12px; justify-items:center;">
                      <li>
                        <a href="https://www.facebook.com/people/Quality-Migration-Australia/61578225180799/?mibextid=wwXIfr&rdid=8wljM6npj5VyxWFB&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1a6hNZVHxC%2F%3Fmibextid%3DwwXIfr"
                          target="_blank">
                          <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="28" height="28"
                            alt="Facebook" style="display:block;">
                        </a>
                      </li>
                      <li><a href="https://www.instagram.com/qualitymigration_australia/" target="_blank">
                          <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" width="28" height="28"
                            alt="Instagram" style="display:block;">
                        </a></li>
                      <li><a href="https://www.tiktok.com/@quality.migration?_r=1&_t=ZS-91V2tAd44bh" target="_blank">
                          <img src="https://cdn-icons-png.flaticon.com/512/3046/3046123.png" width="28" height="28"
                            alt="TikTok" style="display:block;">
                        </a></li>
                    </ul>
                  </div>

                </td>
              </tr>
            </table>
          </div>

        </div>
        <!-- Footer Bottom Bar -->
        <div class="footer">
          © {{ date('Y') }} Quality Migration — All Rights Reserved.
        </div>


      </div>
    </div>
</body>

</html>