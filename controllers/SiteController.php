<?php 
    namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

    /**
     * @package app\controllers
     */

    class SiteController extends Controller {
        public function home() {
            $params = [
                'name' => 'nSett'
            ];
            return $this->render('home', $params);
        }
        public function contact() {
            return $this->render('contact');
        }
        public function handleContact(Request $request) {
            $body = $request->getBody();
            echo '<pre>';
            var_dump($body);
            echo '</pre>';
            exit;
            return 'Handling submitted data';
        }
    }
?>