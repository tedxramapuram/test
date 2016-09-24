<?php
/**
 * Created by PhpStorm.
 * User: Akshaya Krishnaswamy
 * Date: 9/24/2016
 * Time: 2:05 PM
 */

class Page extends CRMPageController
{
    public function loginPage(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $response=array();

        if(!($username && $password)){
            $response['message']="Enter a username and password";}

            elseif(!username){
            $response['message'] = "Enter a Username";
        }
            elseif(!password){
                $response['message']="Enter a password";
            }
           return json_encode($response);

    }

}