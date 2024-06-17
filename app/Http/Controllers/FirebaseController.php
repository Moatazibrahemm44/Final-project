<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    protected $firebaseService;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }

    public function retrieveImagesByName($name)
    {
        $storage = $this->firebaseService->getStorage();
        $bucket = $storage->getBucket();
        
        // List all objects in the bucket
        $objects = $bucket->objects();
        
        $matchedImages = [];
        foreach ($objects as $object) {
            $objectName = $object->name();
            
            // Check if the object name contains the specified name
            if (strpos($objectName, $name) !== false) {
                // Generate a signed URL that expires in 24 hours
                $expiresAt = new \DateTime('tomorrow');
                $signedUrl = $object->signedUrl($expiresAt);
                
                // Add to the result array
                $matchedImages[] = [
                    'name' => $objectName,
                    'url'  => $signedUrl
                ];
            }
        }
        
        return response()->json($matchedImages);
    }
}
