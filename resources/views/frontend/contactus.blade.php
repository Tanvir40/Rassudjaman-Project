@include('frontend.partial.header');
        </header>
        <main>
                            <div class="main_content ">
                    <div class="container py-5">
                        <section>
    <div class="row py-5">
        <div class="col-md-6">
            <form action="{{route('customer.form.save')}}" method="post">
                @csrf
                <fieldset>
                    <legend style="text-align: center;"> Send your message</legend>
                                            <div class="row">
                            <div class="col-md-12 form-group text">
                                <label class="control-label" for="first_name"> FullName::</label>
                                <input class="form-control" name="name" id="first_name" type="text" value="">
                                                            </div>
<!--                            <div class="col-md-6 form-group text">
                                <label class="control-label" for="last_name"> Your Last Name:</label>
                                <input class="form-control" name="last_name" id="last_name" type="text" value="">
                                                            </div>-->
                            <div class="col-md-6 form-group text">
                                <label class="control-label" for="phone"> Telephone:</label>
                                <input class="form-control" name="phone" id="phone" type="text" value="">
                                                            </div>
                            <div class="col-md-6 form-group text">
                                <label class="control-label" for="email"> Email:</label>
                                <input class="form-control" name="email" id="email" type="email" value=""
                                       title="Ensure your email is correct as critical account information will be sent this email address.">
                                                            </div>
                            <div class="col-md-12 form-group text">
                                <label class="control-label" for="message"> Message:</label>
                                <textarea class="form-control" name="message" id="message" rows="5"
                                          cols="30"></textarea>
                                                            </div>
                            <div class="col-md-12 actionButton">
                                <button type="submit" class="btn btn-success" name="btnAction" value="save"><span>Submit</span>
                                </button>
                            </div>
                        </div>
                                    </fieldset>
            </form>
        </div>
        <div class="col-md-6">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3651.241343056795!2d90.3629992!3d23.7744187!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a5369e9b2d%3A0x6b7d09b31d80c52b!2sIngenious%20PulmO-FIT!5e0!3m2!1sbn!2sbd!4v1623659204936!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>                    </div>
                </div>
                    </main>
       @include('frontend.partial.footer');
