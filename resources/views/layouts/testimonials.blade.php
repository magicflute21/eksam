<section class="testimonials">
    <div class="testimonials__grid">
        @foreach($testimonials as $testimonial)
            <div class="testimonials__grid-item">
                <div class="decoration">
                    <p>"</p>
                </div>
                    <div class="testimonial-image"></div>
                    <p class="person-feedback"> {{$testimonial->feedback}} </p>
                    <div class="person">
                        <p class="person-name"><strong> {{$testimonial->name}} </strong></p>
                        <p class="person-title"><strong> {{$testimonial->title}} </strong></p>
                    </div>
            </div>
        @endforeach
    </div>
</section>
