<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\Crypt;

class LinkController extends Controller
{

  public function home()
  {

      $data = [
        'title' => 'Add link'
      ];


      return view('home', $data);
  }

  public function newLink(Request $request)
   {
       $val = 'abcdefghijklmnopqrstuvwxyz1234567890';
       $randset = null;
       for($i = 0; $i <= 4; $i++) {
            $rand = rand(0,35);
            $randset .= $val{$rand};
       }
       $a = new Link;

       $a->url = $request->url;
       $a->date = $request->date;
       $a->password = password_hash($request->password, PASSWORD_DEFAULT);
       $a->randset = $randset;

       $a->save();
       return redirect('/link?view=' . $randset);
   }

  public function link()
  {
      date_default_timezone_set('Europe/Kiev');
      $datetime = Date('Y-m-d H:i:s');

      $colors = [
        'links' => Link::where('randset', $_GET['view'])
               ->get()
      ];

      foreach($colors['links'] as $color){
          if($datetime < $color['date']) {
             $col = 'true';
          }else {
             $col = 'false';
          }
        }

      $data = [
        'title' => 'My link',
        'col' => "$col",
        'links' => Link::where('randset', $_GET['view'])
               ->get()
      ];
      return view('link', $data);
  }
}
