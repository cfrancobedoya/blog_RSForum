<?php
// Developed by Cristian Franco Bedoya
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServiceTeamController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data = array(file_get_contents("http://3.217.114.44/public/api/v2/products"));
        // https://swapi.dev/api/
        // var_dump( $data );
        // return view('team', [
        //     'posts' => Post::with('user')->latest()->paginate(),
        //     'data' => $data
        // ]);
        $api = Http::get('http://3.217.114.44/public/api/v2/products');
        $data = $api->json();
        return view('team', compact('data'));
    }
}
