<?php

namespace App\Routes;

class Web {
	public function handle($uri, $method) {
		switch ("$method $uri") {
			case 'GET /api/products':
				require __DIR__ . '/../controllers/ProductController.php';
				(new \App\Controllers\ProductController())->index();
				break;
			case 'POST /api/login':
				require __DIR__ . '/../controllers/AuthController.php';
				(new \App\Controllers\AuthController())->login();
				break;

			default:
				http_response_code(404);
				echo json_encode(['error' => 'Not Found']);
				break;
		}
	}
}
