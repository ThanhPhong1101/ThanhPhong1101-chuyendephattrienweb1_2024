<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- 2 Cột chứa form -->
            <div class="col-md-8">
                <h1><strong>Get In Touch With Fixit</strong></h1>
                <p>Simply complete the enquiry form &amp; We will respond as soon as we can.</p>
                <form action="#" method="post" aria-label="Contact form" novalidate>
                    <div class="form-group">
                        <label for="contact_form_fname"><strong>Name</strong><span class="required">*</span></label>
                        <input type="text" class="form-control long-input" id="contact_form_fname" name="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_email"><strong>Email</strong><span class="required">*</span></label>
                        <input type="email" class="form-control long-input" id="contact_form_email" name="Email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_subject"><strong>Subject</strong></label>
                        <input type="text" class="form-control long-input" id="contact_form_subject" name="Subject">
                    </div>
                    <div class="form-group">
                        <label for="contact_form_comment"><strong>Message</strong></label>
                        <textarea class="form-control" id="contact_form_comment" name="Message" rows="5"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><strong>Submit</strong></button>
                </form>
            </div>
            <!-- Cột chứa Address, Schedule, Phone -->
            <div class="col-md-4">
                <div class="well-bg">
                    <div class="well-inner">
                        <div class="widget-address"><i class="fa fa-home"></i>
                            <h2><strong>Address</strong></h2>
                            136 Kingston Road<br>
                            SW19 1LY,<br>
                            Wimbledon London.
                        </div>
                    </div>
                </div>
                <div class="well-bg">
                    <div class="well-inner">
                        <div class="widget-schedule"><i class="fa fa-clock-o"></i>
                            <h2><strong>Schedule</strong></h2>
                            Mon - Fri: 9am - 6pm<br>
                            Sat: Holiday<br>
                            Sun: Appointments only.
                        </div>
                    </div>
                </div>
                <div class="well-bg">
                    <div class="well-inner">
                        <div class="widget-phone"><i class="fa fa-phone"></i>
                            <h2><strong>Phone</strong></h2>
                            Office: 8100-123-456<br>
                            Mobile: 8100-456-789
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>