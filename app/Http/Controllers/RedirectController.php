<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Link;


class RedirectController extends Controller
{

  public function redirect()
  {
    date_default_timezone_set('Europe/Kiev');
    $datetime = Date('Y-m-d H:i:s');

    if(isset($_GET['password'])) {
        $pas = $_GET['password'];
    }else {
        $pas = '';
    }

    $data = [
      'links' => Link::where('randset', $_GET['view'])
             ->get()
    ];

    foreach($data['links'] as $link){
        $red = $link['url'];

        if($datetime < $link['date']) {
           return redirect("$red");
        }elseif(password_verify($pas, $link['password'])) {
            return redirect("$red");
        }else {
            return redirect('/notfound');
        }
    }

  }

}
