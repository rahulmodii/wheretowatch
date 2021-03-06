<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\platforms;
use App\index;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
        $user = Auth::user();
        
        if (empty($user)){
            return redirect()->route('home'); 
        }
        echo "hello"."   ".$user->name; 
        $flights = platforms::all();
        return view('shows')->with('flights',$flights);
        
    }
    public function list()
    {  
        $visits=Redis::incr('visits');
        $listings='';
        $shows = index::all();
        if(!empty($shows))
        {
            $listings=$shows;
        }
        return view('new')->with('listings',$listings)->with('visits',$visits);
        // return view ('layout.app')->with('visits',$visits);
        
    }
    public function searchlist(Request $request){
        
        $list = index::Where('showname', 'like', '%' .$request->search . '%')->get();

        
        $somme='';
        if(!$list->isEmpty()){
            $somme=$list;
                }
            
                return view('new')->with('somme',$somme);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $flight = new index;
        $flight->showname = $request->shows;
        $flight->platformname = $request->platform;
        $flight->save();
        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showdetails($title){
    
        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET','http://www.omdbapi.com/?apikey=68ec73bc&t='.$title.'');
        $response = $request->getBody();
        $response = $request->getBody()->getContents();
        // dd($response);
        return view('details')->with('response',json_decode($response, true));
    }

    public function admin(){
        return view('admin');
    }
}
