<?php

include "header.php";

?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Contacts</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contacts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

     <!--container start-->
    <div class="container">


        <div class="row">
            <div class="col-lg-5 col-sm-5 address">
                <h4>Pakistan</h4>
                <p>
                    Jonathon Smith <br/>
                    Street Address 228 Park Avenue South Karachi, <br/>
                    NY 10003-1502.
                </p>
                <br>
                <br>
                <br>
                <p>
                    Phone <br/>
                    <span class="muted">(212) 210-2100</span><br/>
                    Fax <br/>
                    <span class="muted">212-995-4794.</span><br/>
                    Email <br/>
                    <span class="muted">info@excelonservice.com</span>
                </p>
            </div>
            <div class="col-lg-7 col-sm-7 address">
                <h4>Send a Message</h4>
                <div class="contact-form">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" placeholder="" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Message</label>
                            <textarea placeholder="" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!--container end-->

<?php

include "footer.php";

?>