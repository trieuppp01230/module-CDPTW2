<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-7">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-inner">
                    <h3 class="title">Contact Form</h3>
                    <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et
                        justo. Praesent mattis commodo augue.
                        Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo. augue.</div>
                    <div class="form">
                        <div class="form-inner">
                            <input type="text" class="sppb-form-control" placeholder="Name" />
                            <input type="text" class="sppb-form-control" placeholder="Email" />
                            <input type="text" class="sppb-form-control" placeholder="Subject" />
                            <textarea class="sppb-form-control" placeholder="Message"></textarea>
                            <button class="submit">Submit Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-inner">
                    <h3 class="sppb-addon-title">Address Info
                        <span>Company name</span></h3>
                    <div class="sppb-addon-content">
                        <p class="address">3096 Cemetery Hollow Street, Houston, TX 77099 Telephone: +1 1234-567-89000
                            FAX: +1 0123-4567-8900</p>
                        <p>E-mail: mail@companyname.com</p>
                        <p class="web">Website: www.yoursitename.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>