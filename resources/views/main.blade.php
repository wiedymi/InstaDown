@extends('app')

@section('section')
<section>
    <div class="container ">
        <div class="content">
            <div class="block_title">
                <h1 class="h1_title">Download <b>Instagram</b> videos and photos</h1>
            </div>      
            <div class="form">
                <form class="download_form">
                    {{ csrf_field() }}
                    <input type="text" name="source_url" required="" name="" autocomplete="off" placeholder="Paste Instagram video or photo URL">
                    <div class="error_block hidden_pc">
                        error
                    </div>  
                    <button>
                        <span class="mob_text">Download</span>
                        <i class="icon-download-button"></i>
                    </button>
                </form>
                <p class="input_title">https://www.instagram.com/p/BcDCPIEjoeL/</p>
            </div>
            <div class="error_block hidden_mob">
                error
            </div>  
            <div class="info_block">
                <h4 class="info_block_title">What is dowgram.com?</h4>
                <p class="info_desc">Download Instagram videos and photos without registration, completely free and fast, works on pc and mobile phones. 
                The service is easy to use, you only need to paste an Instagram video or photo URL and click on the download button, that’s all! 
                If you like our service feel free and share with your friends.</p>
                <div class="social_block">
                    <p class="share_title">share</p>
                     <a href="#"
           data-type="facebook" 
           class="csbuttons facebook"
           ><i class="icon-facebook"></i></a>

        <a href="#" 
           data-type="twitter" 
           class="csbuttons twitter"
           ><i class="icon-twitter "></i></a>

        <a href="#" 
           data-type="pinterest" 
           class="csbuttons pinterest"
           ><i class="icon-pinterest "></i></a>
           
        <a href="#" 
           data-type="google" 
           class="csbuttons google_plus"
           ><i class="icon-google-plus"></i></a>
                    
                </div>
            </div>      
        </div>

    </div>  
</section>
@endsection