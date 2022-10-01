<section class="section app-safety">
    <div class="shapes-container">
        <!-- <div class="shape shape-circle">
            <div data-aos="fade-up-left"></div>
        </div> -->
        <div class="shape shape-triangle" data-aos="fade-up-right" data-aos-delay="200">
            <div></div>
        </div>
        <div class="shape pattern pattern-dots"></div>
    </div>
    <div class="container bring-to-front">
        <div class="row gap-y align-items-center justify-content-between">
            <div class="col-md-6 order-md-last">
                {{ $slot }}
            </div>
            <div class="col-md-6 col-lg-5" data-aos="fade-right">
                <div class="card shadow-lg"><img src="{{ asset('front/img')}}/blog/contact_form.jpg"
                        alt="..." class="card-img-top">
                    <div class="card-body">
                        <form class="form row" id="schedule_free_expert">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label> 
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label> 
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="Phone" class="form-label">Phone</label> 
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" pattern="[0-9]{1,15}" >
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="company" class="form-label">Company</label> 
                                <input type="text" class="form-control" name="company_name" id="company" placeholder="Company Name" >
                            </div>
                            <div class="mb-5 col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" name="description" id="description" placeholder="Description" ></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-rounded btn-primary" type="submit">Send a Message</button>
                                <span id="thanks_div"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
