<?PHP
namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Storage;

class FirebaseService
{
    protected $firebase;

    public function __construct()
    {
        $this->firebase = (new Factory)
            ->withServiceAccount(config('firebase.credentials'));
    }

    public function getAuth(): Auth
    {
        return $this->firebase->createAuth();
    }

    public function getStorage(): Storage
    {
        return $this->firebase->createStorage();
    }
}
