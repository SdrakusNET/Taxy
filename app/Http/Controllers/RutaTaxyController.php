<?php

namespace App\Http\Controllers;

use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;

use App\Http\Requests;

class RutaTaxyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	     protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }

	
  
    public function index()
    {




		$config['center'] = 'Acayucan, veracruz';
$config['zoom'] = 'auto';
$config['map_type']='HYBRID';
$this->gmap->initialize($config);

$marker = array();
$marker['position'] = 'Acayucan, veracruz';
$marker['draggable'] = true;
$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
$this->gmap->add_marker($marker);



   /*

 $config = array();
    $config['center']='Acayucan, veracruz';
    $config['zoom']='14';
    $config['map_height']='500px';

    $config['scrollwheel']=true;

//$config['center'] = '37.4419, -122.1419';
//$config['zoom'] = 'auto';
 
$config['directions'] = TRUE;
$config['directionsStart'] = 'venustiano carranza 706 acayucan veracruz';
$config['directionsEnd'] = 'benito juarez acayucan veracruz';
$config['directionsDivID'] = 'directionsDiv';


$config['trafficOverlay'] = TRUE;
      $this->gmap->initialize($config); // Initialize Map with custom configuration


 


    $marker['position']='Acayucan, veracruz';
    $marker['infowindow_content']='Air Canada Centre';
     $this->gmap->add_marker($marker);



    $marker['position']='Hidalgo Acayucan, veracruz';
    $marker['infowindow_content']='Air Canada Centre';
     $this->gmap->add_marker($marker);

*/

 $map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']


    return view('Rutas.index')->with('map',$map);
		
		


	}

   
}
