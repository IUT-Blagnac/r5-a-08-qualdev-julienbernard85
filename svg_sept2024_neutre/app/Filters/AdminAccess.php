<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminAccess implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //$auth = service('auth');
		$session = \Config\Services::session();

        if ($session->has('is_admin') && $session->get('is_admin') === true) {

        } else {
            return redirect()->to('/map');
        }
	
    }
	
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}