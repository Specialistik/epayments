namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function test(int $id )
    {
        return new Response('ID is ' . $id);
    }
}