<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ayesh\InstagramDownload\InstagramDownload;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function Download(Request $request)
    {
        $validatedData = $request->validate([
            'source_url' => 'required',
            'action' => 'required',
        ]);
        $urlast = $request->source_url;
        $url = $request->source_url;
            
        try {
        $client = new InstagramDownload($url);
        $url = $client->getDownloadUrl(); // Returns the download URL.
        $type = $client->getType(); // Returns "image" or "video" depending on the media type.
        }
        catch (\InvalidArgumentException $exception) {
        /*
        * \InvalidArgumentException exceptions will be thrown if there is a validation 
        * error in the URL. You might want to break the code flow and report the error 
        * to your form handler at this point.
        */
        $error = $exception->getMessage();
        }
        catch (\RuntimeException $exception) {
        /*
        * \RuntimeException exceptions will be thrown if the URL could not be 
        * fetched, parsed, or a media could not be extracted from the URL. 
        */
        $error = $exception->getMessage();
        }
        if($url === $urlast){
            $status = false;
        }
        else{
            $status = true;
        }
        $DownloadLink = [
            "url" => $url,
            "username" => $url,
            "id" => $url,
            "status" => $status,
        ];

        $DownloadLink = json_encode($DownloadLink);
        return $DownloadLink;
    }
    public function Contact(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'text' => 'required'
        ]);
        $to      = "wiedymi0@gmail.com";
        $subject = $request->name;
        $message = $request->text;
        $headers = 'From: '.$request->email. "\r\n" .
            'Reply-To: wiedymi0@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        return "ok";
    }
}
