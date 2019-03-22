@extends('app')

@section('section')
<section>
    <div class="container ">
        <div class="content">
            
            <div class="info_block text_block">
                <h4 class="info_block_title">Contact us</h4>
                <p class="info_desc">Contact us with any questions or suggestions, and our team will answer within 2 working days.</p>
            
            </div>	
            <form method="POST" action="" class="contact-us-form" id="contact-us-form">
                <input class="input-form" type="text" name="name" placeholder="Your name" required>
                <input class="input-form" type="test" name="email" placeholder="Email" required>
                <textarea class="input-form" name="text" rows="6" placeholder="Your message" required></textarea>
                <p>
                    <span id="loading-place-form"></span>
                    <button type="submit" class="orange-button">Send</button>
                </p>
                <input class="input-form" type="email" name="repeat_email" placeholder="Email again" style="visibility: hidden; opacity: 0; height: 1px;">
            </form>	
            <div class="contact-form-thanks hidden" id="contact-us-thanks">
                <div>
                    <div>Thank you for your message. We will be in contact with you as soon as possible.</div>
                </div>
            </div>
        </div>

    </div>	
</section>
@endsection