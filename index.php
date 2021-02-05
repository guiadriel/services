<?php

require_once __DIR__ . "/vendor/autoload.php";

$googleApiKey = "AIzaSyD6wHRdfhdDzr5YSkl0BLzRtfxA6h3FZbk";

// $client = new Google_Client();
// $client->setApplicationName('API code samples');
// $client->setScopes([
//     'https://www.googleapis.com/auth/youtube.readonly',
// ]);
// $client->setDeveloperKey($googleApiKey);

// $service = new Google_Service_YouTube($client);

$listVideoIds = ['Ks-_Mh1QhMc','c0KYU2j0TM4', 'eIho2S0ZahI', 'slx9mFLICmA'];

$queryParams = [
  'id' => join(',', $listVideoIds)
];

// $response = $service->videos->listVideos('status', $queryParams);

// $videos = $response->getItems();

// $existingVideos = array_map(function( Google_Service_YouTube_Video $video ){
//   return $video->getId(); 
// }, $videos);

$founded_videos = ['Ks-_Mh1QhMc','slx9mFLICmA'];

$not_found_video_ids = [];
foreach($listVideoIds as $video_id ){
  if( !in_array($video_id, $founded_videos) ){
    $not_found_video_ids[] = $video_id;
  }
}

dd($not_found_video_ids);

// dd($videos);

// foreach( $videos as $video ){
//     $video->getId();
//     // dd($item);
//     // dd();
// }