<section class="section bg-light edge bottom-right">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2><span class="bold">{{$faqTitle}} FAQs?</span></h2>
                <!-- <p class="lead">Not sure how this template can help you? Wonder why you need to buy our theme?</p> -->
                <p class="text-muted">Based on our extensive app development expertise, we have achieved the capabilities to solve all your queries. We have enlisted some of the most asked questions with respective solutions. Let's check and get the best answers. </p>
            </div>
            <div class="col-md-8">
                <div class="accordion accordion-clean" id="faqs-accordion">
                   {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
