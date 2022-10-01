<div class="shadow bg-contrast p-4 rounded">
    
    <form method="POST" enctype="multipart/form-data" action="{{ route('contact-us.store') }}" id="contactForm">
        <div class="row">
        @csrf
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_firstname" class="text-dark bold mb-2">First Name *</label>
                    <input type="text" name="contact_firstname" id="contact_firstname" class="form-control bg-contrast" placeholder="Enter First Name Here" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_lastname" class="text-dark bold mb-2">Last Name *</label>
                    <input type="text" name="contact_lastname" id="contact_lastname" class="form-control bg-contrast" placeholder="Enter Last Name Here" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_email" class="text-dark bold mb-2">Email address *</label>
                    <input type="text" name="contact_email" id="contact_email" class="form-control bg-contrast" placeholder="Enter Valid Email Here" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_phone" class="text-dark bold mb-2">Phone Number *</label>
                    <input type="text" id="contact_phone" class="form-control" placeholder="Phone Number" name="contact_phone">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_budget" class="text-dark bold mb-2">Budget</label>
                    <select id="contact_budget" name="contact_budget" class="form-select">
                        <option value="" selected="">Select Budget</option>
                        <option value="Less than $10,000">Less than $10,000</option>
                        <option value="$10,000 to $50,000">$10,000 to $50,000</option>
                        <option value="$50,000+">$50,000+</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_formFile" class="text-dark bold mb-2">Attachment</label>
                    <input class="form-control" name="contact_file" type="file" id="contact_File">
                </div>
                @if ($errors->has('file'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mb-3">
                    <label for="contact_message" class="text-dark bold mb-2">Message *</label> 
                    <textarea name="contact_message" id="contact_message" class="form-control bg-contrast" placeholder="" rows="3" required></textarea>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <!-- {!! RecaptchaV3::field('register') !!} -->
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" value="">
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-end">
                <button id="contact-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-primary btn-rounded">Send Message</button>
            </div>
        </div>
    </form>
    </Hr>
    <div class="response-message" style="display: none;">
        <div class="section-heading"><i class="fas fa-check font-lg"></i>
            <p class="font-md m-0">Thank you!</p>
            <p class="response">Your message has been send, we will contact you as soon as possible.</p>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LefrjghAAAAAC1RZIzOViPebvpEcymjDa3nSjhz"></script>
<script>
        grecaptcha.ready(function() {
        // grecaptcha.reset();
        grecaptcha.execute('6LefrjghAAAAAC1RZIzOViPebvpEcymjDa3nSjhz', {action: 'register'}).then(function(token) {
        if(token) {
            $('#g-recaptcha-response').val(token);
        }
            console.log($("input[name='g-recaptcha-response']").val());
        });
    });
</script>
