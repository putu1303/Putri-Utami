<?php include "header.php"; ?>
     <!-- Contact Us -->
    <section id="contact" class="mb-5">
    <div class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center mt-5 mb-2">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                    <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Berhasil Terkirim!
        </div>
<?php

}

?>
     
                    <form action="proses-contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                        <div class="row">
                            <div class="col-xl-6 form-group">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" required>
                            </div>
                            <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="cap">Your message has been sent. Thank you!</div>
                        </div>
                        <input type="submit" name="simpan" value="Send" class="send">
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- end -->

  <?php include "footer.php";?>