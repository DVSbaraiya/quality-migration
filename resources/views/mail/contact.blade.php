<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>New Contact Submission</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f6f8fb;
      font-family: Arial, sans-serif;
      color: #222;
    }

    .wrap {
      width: 100%;
      padding: 20px;
    }

    .container {
      max-width: 680px;
      margin: 0 auto;
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(20, 32, 56, 0.06);
    }

    .header {
      padding: 20px 24px;
      text-align: left;
      background: #ffffff;
      border-bottom: 1px solid #eef2f6;
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .logo {
      max-width: 150px;
      height: auto;
      display: block;
    }

    .head-right {
      margin-left: auto;
      text-align: right;
    }

    .head-right .badge {
      background: #0055A4;
      color: #fff;
      padding: 8px 12px;
      border-radius: 6px;
      font-weight: 700;
      font-size: 13px;
      display: inline-block;
    }

    .body {
      padding: 24px;
    }

    .lead {
      font-size: 16px;
      margin: 0 0 18px;
      color: #333;
    }

    .details {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 18px;
    }

    .details td {
      padding: 10px 8px;
      vertical-align: top;
      border-top: 1px solid #f1f3f6;
      font-size: 14px;
    }

    .details td.label {
      width: 150px;
      color: #0055A4;
      font-weight: 700;
    }

    .message-box {
      background: #fafbfc;
      border-left: 4px solid #E62027;
      padding: 12px 14px;
      border-radius: 4px;
      color: #333;
      margin-top: 12px;
    }

    .actions {
      padding: 18px 24px;
      border-top: 1px solid #eef2f6;
      display: flex;
      gap: 12px;
      justify-content: flex-end;
      background: #ffffff;
    }

    .btn {
      background: #0055A4;
      color: #fff !important;
      text-decoration: none;
      padding: 10px 14px;
      border-radius: 6px;
      font-weight: 700;
      font-size: 14px;
    }

    .btn-secondary {
      background: #E62027;
    }

    .footer {
      padding: 14px 20px;
      text-align: center;
      background: #f9fafb;
      color: #7b8794;
      font-size: 13px;
    }

    @media screen and (max-width:520px) {
      .header {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
      }

      .head-right {
        text-align: left;
        margin-left: 0;
      }

      .details td {
        display: block;
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="wrap">
    <div class="container">
      <div class="header">
        <img src="https://www.qualitymigration.com/front/img/logo/logo.png" alt="Quality Migration" class="logo">
        <div class="head-right">
          <div class="badge">New Enquiry</div>
          <div style="font-size:12px; color:#7b8794; margin-top:6px;">{{ now()->format('d M Y H:i') }}</div>
        </div>
      </div>

      <div class="body">
        <p class="lead">You have received a new contact form submission. Details below:</p>

        <table class="details" cellpadding="0" cellspacing="0" role="presentation">
          <tr>
            <td class="label">Name</td>
            <td>{{ $contact['name'] }}</td>
          </tr>
          <tr>
            <td class="label">Email</td>
            <td><a href="mailto:{{ $contact['email'] }}" style="color:#0055A4; text-decoration:none;">{{
                $contact['email'] }}</a></td>
          </tr>
          <tr>
            <td class="label">Phone</td>
            <td>{{ $contact['number'] }}</td>
          </tr>
          <tr>
            <td class="label">Page URL:</td>
            <td>{{ $contact['page_url'] }}</td>
          </tr>
          <tr>
            <td class="label">IP</td>
            <td>{{ request()->ip() ?? 'N/A' }}</td>
          </tr>
        </table>

        <div>
          <div style="font-weight:700; color:#333; margin-bottom:8px;">Message</div>
          <div class="message-box">{{ $contact['message'] ?? 'No message provided.' }}</div>
        </div>
      </div>

      <div class="actions">
        <a href="mailto:{{ $contact['email'] }}" class="btn">Reply to Client</a>
      </div>

      <div class="footer">
        Quality Migration — Education & Visa Services
      </div>
    </div>
  </div>
</body>

</html>